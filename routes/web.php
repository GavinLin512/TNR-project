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
    // 可以寫個 middleware 防止登入後進到這兩個頁面
    Route::get('/login', 'FrontController@login');
    Route::get('/register', 'FrontController@register');
});

Route::middleware(['auth'])->group(function () {
    // TNR-admin
    Route::prefix('TNR-admin')->group(function () {
        Route::get('/dashboard', 'AdminController@index');

        Route::prefix('/user')->group(function () {
            Route::get('/', 'UserController@index');
            Route::post('/store', 'UserController@store');
            Route::post('/update/{id}', 'UserController@update');
            Route::delete('/delete/{id}', 'UserController@delete');
        });
        Route::get('/user_create', 'UserController@create');
        Route::get('/user_edit', 'UserController@editIndex');
        Route::get('/user_edit/{id}', 'UserController@edit');

        Route::prefix('/story')->group(function () {
            Route::get('/', 'StoryController@index');
            Route::get('/create', 'StoryController@create');
            Route::post('/store', 'StoryController@store');
            Route::get('/edit', 'StoryController@editIndex');
            Route::get('/edit/{id}', 'StoryController@edit');
            Route::post('/update/{id}', 'StoryController@update');
            Route::delete('/delete/{id}', 'StoryController@delete');
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
