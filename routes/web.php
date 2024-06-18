<?php

use App\Http\Controllers\BarangController;
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

Route::get('/dashboard', function () {
    if (Auth::check()) {
        $users = DB::table('users')->select('id','name','email','address')->get();

        return view('dashboard',compact('users'));
    }
    return redirect()->route('login');
})->name('dashboard');

Route::get('/form', function () {
    return view('layouts.form_horizontal');
})->name('add');



Route::get('/course', function () {
    return view('layouts.course');
})-> name ('course');

Route::get('/marketplace', function () {
    return view('layouts.ecommerce');
})-> name ('marketplace');



Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout') ->name('logout');


Route::get('/login', function () {
    return view('layouts.login');
})-> name ('login');


Route::get('/register', function () {
    return view('layouts.register');
})-> name ('register');



Route::get('/profile', function () {
    $users = DB::table('users')->select('id','name','email','address')->get();

    return view('layouts.profile',compact('users'));
})-> name ('profile');


Route::get('/formedit', function () {
    return view('ecommerce.edit');
})-> name ('formedit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Section Barang Ecommerce

Route::get('/ecommerce', [ BarangController::class ,'ecommerce'])->name('ecommerce');
// returns the form for adding a post
Route::get('/ecommerce/create',[ BarangController::class ,'tambah'])->name('tambah');
// adds a post to the database
Route::post('/ecommerce/store', [BarangController::class ,'@store'])->name('simpan');
// returns a page that shows a full post
Route::get('/ecommerce/{barang}', [BarangController::class ,'@show'])->name('tampilkan');
// returns the form for editing a post
Route::get('/ecommerce/{barang}/edit', [BarangController::class ,'edit'])->name('edit');
// updates a post
Route::put('/ecommerce/{barang}', [BarangController::class ,'@update'])->name('update');
// deletes a post
Route::delete('/ecommerce/{barang}',[ BarangController::class ,'@destroy'])->name('hapus');
