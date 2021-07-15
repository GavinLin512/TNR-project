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
    Route::get('/sponsored_cat', 'FrontController@sponsored_cat');
    Route::get('/assistant', 'FrontController@assistant');
    // 可以寫個 middleware 防止登入後進到這兩個頁面
    // Route::get('/l' , 'FrontController@index_login');
    Route::get('/login', 'FrontController@login');
    Route::get('/register', 'FrontController@register');
});

Route::middleware(['auth' , 'admin'])->group(function () {
    // TNR-admin
    Route::prefix('TNR-admin')->group(function () {
        Route::get('/dashboard', 'AdminController@index');

        Route::prefix('/user')->group(function () {
            Route::get('/', 'UserController@index');
            Route::get('/create', 'UserController@create');
            Route::post('/store', 'UserController@store');
            Route::get('/edit', 'UserController@editIndex');
            Route::get('/edit/{id}', 'UserController@edit');
            Route::post('/update/{id}', 'UserController@update');
            Route::delete('/delete/{id}', 'UserController@delete');
        });

        Route::prefix('/diary')->group(function () {
            Route::get('/', 'diaryController@index');
            Route::get('/create', 'diaryController@create');
            Route::post('/store', 'diaryController@store');
            Route::get('/edit', 'diaryController@editIndex');
            Route::get('/edit/{id}', 'diaryController@edit');
            Route::post('/update/{id}', 'diaryController@update');
            Route::delete('/delete/{id}', 'diaryController@delete');
        });

        Route::prefix('/news')->group(function () {
            Route::get('/', 'NewsController@index');
            Route::get('/create', 'NewsController@create');
            Route::post('/store', 'NewsController@store');
            Route::get('/edit', 'NewsController@editIndex');
            Route::get('/edit/{id}', 'NewsController@edit');
            Route::post('/update/{id}', 'NewsController@update');
            Route::delete('/delete/{id}', 'NewsController@delete');
        });

        Route::prefix('/sponsored_cat')->group(function () {
            Route::get('/', 'SponsoredCatController@index');
            Route::get('/create', 'SponsoredCatController@create');
            Route::post('/store', 'SponsoredCatController@store');
            Route::get('/edit', 'SponsoredCatController@editIndex');
            Route::get('/edit/{id}', 'SponsoredCatController@edit');
            Route::post('/update/{id}', 'SponsoredCatController@update');
            Route::delete('/delete/{id}', 'SponsoredCatController@delete');
        });

        Route::prefix('/adopted_cat')->group(function () {
            Route::get('/', 'AdoptedCatController@index');
            Route::get('/create', 'AdoptedCatController@create');
            Route::post('/store', 'AdoptedCatController@store');
            Route::get('/edit', 'AdoptedCatController@editIndex');
            Route::get('/edit/{id}', 'AdoptedCatController@edit');
            Route::post('/update/{id}', 'AdoptedCatController@update');
            Route::delete('/delete/{id}', 'AdoptedCatController@delete');
        });

        Route::prefix('/donated_cat')->group(function () {
            Route::get('/', 'DonatedCatController@index');
            Route::get('/create', 'DonatedCatController@create');
            Route::post('/store', 'DonatedCatController@store');
            Route::get('/edit', 'DonatedCatController@editIndex');
            Route::get('/edit/{id}', 'DonatedCatController@edit');
            Route::post('/update/{id}', 'DonatedCatController@update');
            Route::delete('/delete/{id}', 'DonatedCatController@delete');
        });

        Route::prefix('/product')->group(function () {

            Route::prefix('/category')->group(function () {
                Route::get('/', 'ProductCategoryController@index');
                Route::get('/create', 'ProductCategoryController@create');
                Route::post('/store', 'ProductCategoryController@store');
                Route::get('/edit/{id}', 'ProductCategoryController@edit');
                Route::post('/update/{id}', 'ProductCategoryController@update');
                Route::delete('/delete/{id}', 'ProductCategoryController@delete');
            });

            Route::prefix('/item')->group(function () {
                Route::get('/', 'ProductController@index');
                Route::get('/create', 'ProductController@create');
                Route::post('/store', 'ProductController@store');
                Route::get('/edit/{id}', 'ProductController@edit');
                Route::post('/update/{id}', 'ProductController@update');
                Route::delete('/delete/{id}', 'ProductController@delete');
                Route::post('/deleteImage', 'ProductController@deleteImage');
            });
        });
    });
});

// Route::prefix('admin')->group(function () {

//     Route::get('/login', function () {
//         return view('login');
//     });
//     Route::get('/register', function () {
//         return view('register');
//     });
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
