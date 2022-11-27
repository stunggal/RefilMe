<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\NotFoundController;
use App\Http\Controllers\TransaksiController;
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

Route::group(['middleware' => ['auth', 'middAdmin']], function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/barang', [BarangController::class, 'index']);
    Route::get('/barang/create', [BarangController::class, 'create']);

    Route::get('/kurir', [KurirController::class, 'index']);
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [DashboardController::class, 'login']);
    Route::get('/register', [DashboardController::class, 'register']);
    Route::post('/register', [DashboardController::class, 'createAnAccount']);
    Route::post('/login', [DashboardController::class, 'loginIntoAnAccount']);
});

Route::group(['middleware' => ['auth', 'middPembeli']], function () {
    Route::get('/pesan', [TransaksiController::class, 'index'])->middleware(['middPembeli']);
    Route::get('/pesan/{barang}', [TransaksiController::class, 'create']);
});



Route::get('/logout', [DashboardController::class, 'logout']);




Route::get('/{err}', [NotFoundController::class, 'index']);
Route::get('/{err}/{err2}', [NotFoundController::class, 'index']);
Route::get('/{err}/{err2}/{err3}', [NotFoundController::class, 'index']);
