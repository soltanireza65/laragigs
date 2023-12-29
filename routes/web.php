<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        "heading" => "Listings...",
        'listings' => Listing::all()
    ]);
});


Route::get('/listing/{id}', function ($id) {
    $listing = Listing::find($id);
    

    // dd($listing);
    return view('listing', [
        "heading" => "Listing...",
        'listing' => $listing
    ]);
});