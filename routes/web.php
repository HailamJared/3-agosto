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
    return view('layouts.plantilla');
});

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('history', function () {
    return view('HISTORY');
});

Route::get('photos', function () {
    return view('PHOTOS');
});

Route::get('song', function () {
    return view('SONG');
});