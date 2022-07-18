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

Route::get('/home', function () {
    return view('home');
});
Route::get('/About', function () {
    return view('about');
});
Route::get('/student', function () {
    return view('student');
});
Route::get('/tecaher', function () {
    return view('teacher');
});
Route::get('/attandance', function () {
    return view('attandance');
});
