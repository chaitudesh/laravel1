<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UsersController;
use app\Http\Controllers\Login;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});


// Route::get('/users/{name}', 'App\Http\Controllers\Login@loadView');
// Route::view('users', 'users');
// Route::get('/users/{name}', function ($name) {
//     return view('users', ["name" => $name]);
// });
// Route::get('/users', 'App\Http\Controllers\UsersController@loadView');

// Route::post('/users', 'App\Http\Controllers\UsersController@getData');
// Route::view('users', 'users');
Route::view('noaccess', 'noaccess');
Route::get('/users', 'App\Http\Controllers\UsersController@index');
// Route::get('users', 'App\Http\Controllers\UsersController@getData');

Route::view('store', 'storeuser');
Route::post('/storedata', 'App\Http\Controllers\UsersController@storedata');