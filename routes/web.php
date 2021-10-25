<?php

use app\Models\PesertaModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\HomeController;
    
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PesertaController::class, 'index'])->name('peserta');
Route::get('/peserta/detail/{nik}', [PesertaController::class, 'detail']);
Route::get('/peserta/add', [PesertaController::class, 'add']);
Route::post('/peserta/insert', [PesertaController::class, 'insert']); 
Route::get('/peserta/edit/{nik}', [PesertaController::class, 'edit']);
Route::post('/peserta/update/{nik}', [PesertaController::class, 'update']); 
Route::get('/peserta/delete/{nik}', [PesertaController::class, 'delete']);


Route::get('/peserta/pdf', [PesertaController::class, 'cetak_pdf']);


Route::get('/peserta', function () {
    return view('peserta');
});

Route::get('/main_home', function () {
    return view('main_home');
});

Route::get('/daftar', function () {
    return view('daftar');
});


Route::get('/about', function () {
    return view('about');
});


