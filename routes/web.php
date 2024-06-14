<?php

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/full', function () {
    return view('layouts.full');
});


Route::get('/sidebar', function () {
    return view('sidebar');
});


Route::get('/form', function () {
    return view('layouts.form_horizontal');
});



Route::get('/course', function () {
    return view('layouts.course');
});
