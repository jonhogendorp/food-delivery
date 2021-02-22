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
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','App\Http\Controllers\RoleController');
    Route::resource('/users', 'App\Http\Controllers\UserController');
    Route::resource('products','App\Http\Controllers\ProductController');
    Route::resource('restaurants','App\Http\Controllers\RestaurantmanageController');
    });

Route::get('/info', function () {
    return view('info');
});


 
 Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact');
 Route::get('/restaurant', 'App\Http\Controllers\RestaurantController@index')->name('restaurant');
 Route::post('search', 'App\Http\Controllers\AreaController@index')->name('searchresults');
 Route::get('/restaurants/{show}', '\App\Http\Controllers\RestaurantController@show')->name('restaurants.show');
 Route::get('home', 'App\Http\Controllers\HomeController@index')->name('home');
 
