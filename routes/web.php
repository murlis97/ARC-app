<?php

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
use App\Asset;

Route::get('/home', 'AssetsController@index')->name('home');

Route::get('/', 'AssetsController@index')->name('home');

Route::get('/assets', 'AssetsController@index');

Route::get('/assets/create', 'AssetsController@create');

Route::get('/assets/{asset}', 'AssetsController@show');

Route::post('/assets', 'AssetsController@store');

Route::get('/dashboard', function () {
    $assets = Asset::all();
    return view('pages.dashboard', compact('assets'));
});

Route::get('/login',[ 'as' => 'login', 'uses' => 'SessionsController@create']);

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');
