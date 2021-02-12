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

Route::get('/', function () {
    return view('home');
});

Route::get('/p', function () {
    return view('postcode');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});

Auth::routes();

Route::post('search', 'App\Http\Controllers\AreaController@index')->name('searchresults');
