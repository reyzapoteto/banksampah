<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

Route::get('/dashboard', [DashboardController::class ,'home'])->name('dashboard');

Route::get('/form', function () {
    return view('layouts.form_horizontal');
})->name('add');



Route::get('/course', function () {
    return view('layouts.course');
})-> name ('course');

Route::get('/marketplace', [EcommerceController::class ,'index'])->name("marketplace");


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout') ->name('logout');


Route::get('/login', function () {
    return view('auth.layouts.login');
},"login")-> name ('login');


Route::get('/register', function () {
    return view('.layouts.register');
})-> name ('register');





Route::get('/profile', function () {
    $users = DB::table('users')->select('id','name','email','address','role')->get();
    return view('layouts.profile',compact('users'));
})-> name ('profile');



Route::post('/profile/update', [UserController::class ,'update'])->name('profileupdate');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Section Barang Ecommerce

Route::get('/report/Ajukan', [ReportController::class ,'tambah'])->name('tambahReport');
Route::post('/report/Simpan', [ReportController::class ,'simpan'])->name('simpanReport');

Route::get('/ecommerce/{barang}/transaksi', [EcommerceController::class ,'transaksi'])->name('transaksi');
Route::post('/ecommerce/{barang}/transaksi', [EcommerceController::class ,'transaksiSimpan'])->name('transaksiSimpan');
Route::get('/pesanan', [ EcommerceController::class ,'pesanan'])->name('pesanan');



Route::get('/ecommerce', [ BarangController::class ,'ecommerce'])->name('ecommerce');

Route::get('/ecommerce/Pengguna ', [ BarangController::class ,'ecommerce'])->name('ecommercePengguna');
Route::get('/profile/Pengguna ', [ BarangController::class ,'ecommerce'])->name('ecommercePengguna');


Route::get('/profile/pengguna', function () {
    $users = DB::table('users')->select('id','name','email','address','role')->get();
    return view('layouts.profile',compact('users'));
})-> name ('profilePengguna');


// returns the form for adding a post
Route::get('/ecommerce/tambah',[ BarangController::class ,'tambah','upload'])->name('tambah');
// adds a post to the database
Route::post('/ecommerce/simpan', [BarangController::class ,'simpan'])->name('simpan');
// returns a page that shows a full post
Route::get('/ecommerce/{barang}', [BarangController::class ,'tampilkan'])->name('tampilkan');
// returns the form for editing a post
Route::get('/ecommerce/{barang}/edit', [BarangController::class ,'edit'])->name('edit');
// updates a post
Route::put('/ecommerce/{barang}', [BarangController::class ,'update'])->name('update');
// deletes a post
Route::delete('/ecommerce/{barang}',[ BarangController::class ,'hapus'])->name('hapus');
