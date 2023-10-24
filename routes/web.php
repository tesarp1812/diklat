<?php

use App\Http\Controllers\DiklatController;
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
    return view('index');
});

Route::get('/diklat', function () {
    return view('diklat');
});

Route::get('/penilaian', function () {
    return view('penilaian');
});

Route::controller(DiklatController::class)->group(function () {
    Route::get('/peserta_diklat', 'index');
    Route::get('/tambah_peserta', 'create');
    Route::post('/tambah_peserta', 'store');
    Route::get('/tambah_nilai/{$id}', 'nilai');
});
