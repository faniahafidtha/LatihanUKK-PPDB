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
Route::resource('ppdbs','App\Http\Controllers\PpdbController');
Route::get('/cetak-ppdb','App\Http\Controllers\PpdbController@cetakPpdb')->name('cetak-ppdb');
Route::resource('siswas', 'App\Http\Controllers\SiswaController');
Route::get('/cetak-siswa','App\Http\Controllers\SiswaController@cetakSiswa')->name('cetak-siswa');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
