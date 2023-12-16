<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeGetController;


Route::get('/', function () {
    return view('front.home');
});

Route::get('/', 'HomeGetController@home')->name("home");
Route::get('/home', 'HomeGetController@home')->name("home");