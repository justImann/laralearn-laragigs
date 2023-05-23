<?php

use App\Http\Controllers\ListingController;
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