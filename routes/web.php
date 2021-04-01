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
    return redirect('login');
});

Route::get('login', function () {
    return view('login');
});

Route::get('learning-video', function () {
    return view('learning-video');
});

Route::get('class-video', function () {
    return view('class-video');
});

Route::get('my-playlist', function () {
    return view('my-playlist');
});

Route::get('upload-learning', function () {
    return view('upload-learning');
});

Route::get('upload-class', function () {
    return view('upload-class');
});
