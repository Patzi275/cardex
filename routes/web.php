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

// Not included

Route::get('/tasks', [TaskController::class, 'index']);

// Included

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'PageController@home')->name('home.index');

    // Car(s) routes
    Route::get('/voitures', 'CarController@index')->name('car.index');
    Route::get('/voitures/{id}', 'CarController@show')->name('car.show');
    
    // About route
    Route::view('/a-propos', 'apropos')->name('about.show');
    
    // Contact route
    Route::view('/contacts', 'contacts')->name('contacts.show');
    
    Route::group(['middleware' => ['guest']], function () {
        // Register routes
        Route::get('/inscription', 'AuthController@show_register')->name('register.show');
        Route::post('/inscription', 'AuthController@register')->name('register.perform');
        
        // Login routes
        Route::get('/connexion', 'AuthController@show_login')->name('login.show');
        Route::post('/connexion', 'AuthController@login')->name('login.perform');
    });
    
    Route::group(['middleware' => ['auth']], function () {
        
        // Logout routes
        Route::get('/deconnexion', 'AuthController@logout')->name('logout.perform');

        // Users routes
        Route::get('/profil', 'UserController@show')->name('user.show');
        
        // Rent routes
        Route::get('/historique', 'RentController@index')->name('rent.index');
        Route::post('/voitures/{id}/louer', 'RentController@store')->name('rent.store');
        Route::get('/location/supprimer/{id}', 'RentController@destroy')->name('rent.destroy');
    });


    Route::group(['prefix' => 'admin'], function () {
        // Register routes
        Route::get('/inscription', 'AdminAuthController@show_register')->name('admin.register.show');
        Route::post('/inscription', 'AdminAuthController@register')->name('admin.register.perform');

        // Login routes
        Route::get('/connexion', 'AdminAuthController@show_login')->name('admin.login.show');
        Route::post('/connexion', 'AdminAuthController@login')->name('admin.login.perform');

        Route::group(['middleware' => ['adminauth']], function () {
            // Logout routes
            Route::get('/deconnexion', 'AdminAuthController@logout')->name('admin.logout.perform');

            // Admin home
            Route::view('/', 'admin.index')->name('admin.home');

            //Admin cars 
            Route::get('/voitures', 'CarController@index')->name('admin.car.index');
            Route::get('/voitures/{id}', 'CarController@show')->where('id', '[0-9]+')->name('admin.car.show');
            Route::get('/voitures/create', 'CarController@create')->name('admin.car.create');
            Route::post('/voitures/create', 'CarController@store')->name('admin.car.store');
            /**/Route::get('/voitures/edit/{id}', 'CarController@edit')->name('admin.car.edit');
            /**/Route::put('/voitures/edit/{id}', 'CarController@update')->name('admin.car.update');
            Route::delete('/voitures/delete/{id}', 'CarController@destroy')->name('admin.car.destroy');

            //Admin rents 
            Route::get('/locations', 'RentController@index')->name('admin.rent.index');
            Route::get('/locations/{id}', 'RentController@show')->where('id', '[0-9]+')->name('admin.rent.show');
            Route::get('/locations/edit/{id}', 'RentController@edit')->where('id', '[0-9]+')->name('admin.rent.edit');
            /**/Route::put('/locations/edit/{id}', 'RentController@update')->where('id', '[0-9]+')->name('admin.rent.update');
            Route::delete('/locations/destroy/{id}', 'RentController@destroy')->where('id', '[0-9]+')->name('admin.rent.destroy');


            //Admin users 
            Route::get('/utilisateurs', 'UserController@index')->name('admin.user.index');
            Route::get('/utilisateurs/{id}', 'UserController@show')->name('admin.user.show');
            Route::get('/utilisateurs/edit/{id}', 'UserController@edit')->name('admin.user.edit');
            Route::put('/utilisateurs/edit/{id}', 'UserController@update')->name('admin.user.update');
        });
    });
});
