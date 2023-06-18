<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;


class ListingController extends Controller
{
    // showing all listing
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }
    // to the listing form
    public function create() {
        return view('listings.create');
    } 
    // to the listing form
    public function manage() {
        return view('listings.manage');
    } 
    // showing single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    } 

    // post data
    public function store(Request $request) {
        // dd($request->all());
        $formfields = $request->validate([
            'title' => 'required' ,
            'tags' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formfields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formfields['user_id'] = auth()->id();

        Listing::create($formfields);

        return redirect('/')->with('success', 'Listing Created Succsessfully!');
    }
    // show edit form
    public function edit(Listing $listing){
        return view('listings.edit', ['listing' => $listing]);
    }

    // update data
    public function update(Request $request, Listing $listing) {
        // dd($request->all());
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('success', 'Listing updated successfully!');
    }

    public function destroy(Listing $listing) {
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $listing->delete();
        return redirect('/')->with('success', 'Listing Deleted Succsessfully!');
    }
}
