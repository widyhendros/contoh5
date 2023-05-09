<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/barang', [BarangController::class,'index']);
Route::get('/barang/tambah', [BarangController::class,'tambah_barang']);
Route::post('/barang/tambah', [BarangController::class,'store']);
Route::delete('/barang/{id}', [BarangController::class,'delete']);
Route::get('/barang/{id}/edit', [BarangController::class,'edit_barang']);
Route::put('/barang/{id}', [BarangController::class,'update']);


