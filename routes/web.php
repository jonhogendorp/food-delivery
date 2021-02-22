<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', '\App\Http\Controllers\HomeController@index');


 Auth::routes();

 Route::get('/', function () {
    return view('home');
});

Route::get('/info', function () {
    return view('info');
});


 
 Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
 Route::get('/restaurant', [App\Http\Controllers\RestaurantController::class, 'index'])->name('restaurant');
 Route::post('search', 'App\Http\Controllers\AreaController@index')->name('searchresults');
 Route::get('/restaurants/{show}', '\App\Http\Controllers\RestaurantController@show')->name('restaurants.show');
 Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
