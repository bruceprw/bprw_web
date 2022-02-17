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
    return view('welcome');
});

Route::get('/animals', function(){
    return "Swansea zoo has many animals";
    });

Route::get('/fish/', function(){
    return "Swansea zoo has no fish, sorry :(";
});

Route::get('hello/{name}', function ($name) {
    return "Hello $name";
});

Route::redirect('/animals', '/fish', 301);
