<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::prefix('TNR-index')->group(function () {
    Route::get('/', 'FrontController@index');
    Route::get('/login', 'FrontController@login');
    Route::get('/register', 'FrontController@register');
});

Route::middleware(['auth'])->group(function () {
    // TNR-admin
    Route::prefix('TNR-admin')->group(function(){
        Route::get('/dashboard', 'AdminController@index');
    });

    // user
    Route::prefix('TNR-index')->group(function () {
        Route::get('/', 'FrontController@index');
        Route::get('/login', 'FrontController@login');
        Route::get('/register', 'FrontController@register');
    });

});

Route::prefix('admin')->group(function () {

    Route::get('/login', function () {
        return view('login');
    });
    Route::get('/register', function () {
        return view('register');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
