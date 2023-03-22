<?php

use App\Http\Controllers\AuthController;
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
        Route::get('/inscription', 'AuthController@show_register')->name('register.show');
        Route::post('/inscription', 'AuthController@register')->name('register.perform');

        // Login routes
        Route::get('/connexion', 'AuthController@show_login')->name('login.show');
        Route::post('/connexion', 'AuthController@login')->name('login.perform');

        // Users routes
        Route::get('/profil', 'UserController@show')->name('user.show');

        // Rent routes
        Route::get('/historique', 'RentController@index')->name('rent.index');

        // Car(s) routes
        Route::get('/voitures', 'CarController@index')->name('car.index');
        
        // About route
        Route::view('/a-propos', 'apropos')->name('about.show');

        // Contact route
        Route::view('/contacts', 'contacts')->name('contacts.show');
    });

    Route::group(['middleware' => ['auth']], function() {

        // Logout routes
        Route::get('/deconnexion', 'AuthController@logout')->name('logout.perform');
    });
});