<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/offline', function () {    
    return view('modules/laravelpwa/offline');
    });

Route::get('/register', 'RegistrationController@create');

Route::post('/done', 'RegistrationController@store');
Route::resource('products', 'ProductController');
Route::post('/py/{id}', 'ProductController@run');

Route::get('/login', 'LoginController@CheckLogin');
Route::get('/homepage/{id}/', 'RegistrationController@openHomePage');
Route::post('/logout', 'LogoutController@logout');

Route::get('view-records/{id}','showInfoController@showInfo');

Route::get('login/google', 'GoogleController@redirectToProvider');
Route::get('login/google/callback', 'GoogleController@handleProviderCallback');


