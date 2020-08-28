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

Auth::routes(
    [
        'reset' => false,
        'confirm' => false,
        'verify' => false,
    ]
);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainController@index')->name('index')->middleware('auth');
// Route::get('/profile', 'ProfileController@index')->name('profile')->middleware('auth');
Route::resource('/profile', 'ProfileController')->middleware('auth');