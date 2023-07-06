<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\JobSeeker;
use App\Models\Role;
use App\Models\User;
use App\Models\UserLocation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpKernel\Profiler\Profile;

class UserController extends Controller
{
    public function getStarted() {
        return view('auth.get-started');
    }
    public function signupCompany() {
        return view('auth.signup-company');
    }
    public function signupJobseeker() {
        return view('auth.signup-jobseeker');
    }
    public function login() {
    return view('auth.login');
    }
    public function create() {
        return view('users.register');
    }
    public function store(Request $request) {
        // storing data to user table
        $userFormfields = $request->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'birthdate' => 'required',
            'phone_number' => ['required', 'min:10'],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);

        if ($request->hasFile('profile_picture')) {
            $userFormfields['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $userFormfields['full_name'] = $userFormfields['first_name'] . ' ' . $userFormfields['last_name'];
        $userFormfields['password'] = bcrypt($userFormfields['password']);

        $user = User::create($userFormfields);

        // user location formfields
        $userlocFormfields = $request->validate([
            'country' => 'required',
            'province' => 'required',
            'city' => 'required',
            'full_address' => 'required',
        ]);

        $userlocFormfields['user_id'] = $user->id;

        $userlocation = UserLocation::create($userlocFormfields);

        // entri ke table role
        $role = Role::create([
            'user_id' => $user->id,
            'role_type' => $request->input('role_type'),
        ]);

        if ($request->input('role_type') === 'company') {
            $companyFormfields = $request->validate([
                'company_name' => 'required|min:3',
                'company_bio' => 'required',
                'company_website' => 'required',
                'company_logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);
        
            if ($request->hasFile('company_logo')) {
                $companyFormfields['company_logo'] = $request->file('company_logo')->store('company_logos', 'public');
            }
            $companyFormfields['role_id'] = $role->id;
        
            $company = Company::create($companyFormfields);
        } elseif ($request->input('role_type') === 'job_seeker') {
            $jobseekerFormfields = $request->validate([
                'institution_name' => 'required',
                'level' => 'required'
            ]);

            $jobseekerFormfields['role_id'] = $role->id;

            $jobseeker = JobSeeker::create($jobseekerFormfields);
        }

        auth()->login($user);
    
        return redirect('/')->with('success', 'Account Created Successfully!');
    
    }
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out!');

    }
    // Authenticate User
    public function authenticate(Request $request) {
        // dd($request->all());
        $formfields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formfields)) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}


