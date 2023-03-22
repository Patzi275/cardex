<?php

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

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::view('/', 'index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        // Register routes
        Route::get('/register', 'AuthController@show_register')->name('register.show');
        Route::post('/register', 'AuthController@register')->name('register.perform');

        // Login routes
        Route::get('/login', 'AuthController@show_login')->name('login.show');
        Route::post('/login', 'AuthController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function() {

        // Logout routes
        Route::get('/logout', 'AuthController@logout')->name('logout.perform');
    });
});