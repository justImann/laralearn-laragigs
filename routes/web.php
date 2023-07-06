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
// All Listings
// =============================
Route::get('/', [ListingController::class, 'index']);
// Auth
// =============================
// show Get Started
Route::get('/get-started', [UserController::class, 'getStarted'])->middleware('guest');
// show reg company
Route::get('/signup-company', [UserController::class, 'signupCompany'])->middleware('guest');
// show reg company
Route::get('/signup-jobseeker', [UserController::class, 'signupJobseeker'])->middleware('guest');
// store Register form
Route::post('/users', [UserController::class, 'store']);
// auth user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
// Logout
Route::post('/logout', [UserController::class, 'logout']);

// show Login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');



// Common resources Routes:
// index - show all listings
// show - show single Listing
// create - show form to create a new listing
// store - store new Listing
// edit - edit form to edit a Listing
// update - update listing
// destroy - to delete a listing

// Show Create Form
// =============================
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Post data
// =============================
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
// Show Edit Form
// =============================
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
// Update data
// =============================
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
// Delete data
// =============================
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
// Delete data
// =============================
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');



// Single Listing
// =============================
// cara pertama.. gatau ini cara kerjanya gimana:( yang penting bisa aja awkawkaowkaowk
// ===============
Route::get('/listings/{listing}', [ListingController::class, 'show']);
// show Register form
// ==================
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// store Register form
// ==================
Route::post('/users', [UserController::class, 'store']);

// Logout
// ==================
Route::post('/logout', [UserController::class, 'logout']);

// show Login form
// ==================
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// show Login form
// ==================
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
