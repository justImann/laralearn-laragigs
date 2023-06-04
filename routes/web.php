<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Common resources Routes:
// index - show all listings
// show - show single Listing
// create - show form to create a new listing
// store - store new Listing
// edit - edit form to edit a Listing
// update - update listing
// destroy - to delete a listing


// All Listings
// =============================
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
// =============================
Route::get('/listings/create', [ListingController::class, 'create']);

// Post data
// =============================
Route::post('/listings', [ListingController::class, 'store']);
// Show Edit Form
// =============================
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
// Update data
// =============================
Route::put('/listings/{listing}', [ListingController::class, 'update']);
// Delete data
// =============================
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);
// Delete data
// =============================
Route::delete('/listings/manage', [ListingController::class, 'manage']);

// Single Listing
// =============================
// cara pertama.. gatau ini cara kerjanya gimana:( yang penting bisa aja awkawkaowkaowk
// ===============
Route::get('/listings/{listing}', [ListingController::class, 'show']);
// ===============
// cara kedua.. yang ini mudah dipahami awokaowkaowkaowk
// ===============
// Route::get('/listings/{id}', function($id) {
//     $listing = Listing::find($id);

//     if ($listing) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     } else {
//         abort(404);
//     }
// });

// show Register form
// ==================
Route::get('/register', [UserController::class, 'create']);

// Logout
// ==================
Route::post('/logout', [UserController::class, 'logout']);

// show Login form
// ==================
Route::get('/login', [UserController::class, 'login']);

// show Login form
// ==================
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
