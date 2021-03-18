<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/user', [UserController::class, 'home']);

Route::get('/user/{name}', [UserController::class, 'setName']);

Route::post('/mahasiswa', [MahasiswaController::class, 'save']);

Route::get('/mahasiswa', function () {
    return view('add-mahasiswa');
});
Route::get('/list-stok', [StokController::class, 'list']);

Route::get('/tambah-stok', function () {
    return view('tambah-stok');
});
Route::post('/simpan-stok', [StokController::class, 'simpan']);
