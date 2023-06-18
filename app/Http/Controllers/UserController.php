<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create() {
        return view('users.register');
    }
    public function login() {
        return view('users.login');
    }

    public function store(Request $request) {
        $formfields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $formfields['password'] = bcrypt($formfields['password']);

        $user = User::create($formfields);

        auth()->login($user);
        
        return redirect('/')->with('success', 'Account Created Successfully!');
    }
    // logout
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out!');

    }
    // Authenticate User
    public function authenticate(Request $request) {
        // dd($request->all());
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}


