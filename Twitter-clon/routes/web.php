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
Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainController@index')->name('index')->middleware('auth');
// Route::get('/profile', 'ProfileController@index')->name('profile')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::resource('/post', 'PostController');
    Route::resource('/comment', 'CommentController');
    Route::get('/user/passwordChangeForm/{id}', 'UserController@PasswordChangeForm')->name('PasswordChangeForm');
    Route::post('/user/passwordChange/{id}', 'UserController@ChangePassword')->name('ChangePassword');
    Route::resource('/user', 'UserController');
    Route::get('/live_search', 'LiveSearch@index')->name('live_search.index');
    Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
});
// Route::resource('/profile', 'ProfileController');