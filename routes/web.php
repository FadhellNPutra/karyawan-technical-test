<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KontrakController;

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
Route::get('/home', function () {
    return view('content.home');
});
// Route::get('/pegawai/create', function () {
//     return view('form.pegawai');
// });
// Route::get('/jabatan/create', function () {
//     return view('form.jabatan');
// });
// Route::get('/kontrak/create', function () {
//     return view('form.kontrak');
// });

// CRUD
// Create
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::get('/jabatan/create', [JabatanController::class, 'create']);
Route::get('/kontrak/create', [KontrakController::class, 'create']);
// Untuk mengirim data ke database
Route::post('/pegawai', [PegawaiController::class, 'store']);
Route::post('/jabatan', [JabatanController::class, 'store']);
Route::post('/kontrak', [KontrakController::class, 'store']);