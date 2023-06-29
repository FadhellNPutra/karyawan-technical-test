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
    return view('master');
});
Route::get('/pegawai', function () {
    return view('form.pegawai');
});
Route::get('/jabatan', function () {
    return view('form.jabatan');
});
Route::get('/kontrak', function () {
    return view('form.kontrak');
});