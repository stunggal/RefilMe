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

Route::get('/', [DashboardController::class, 'index'])->name('dash');

Route::group(['middleware' => ['middAdmin']], function () {
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::get('/barang/create', [BarangController::class, 'create']);
});

Route::group(['middleware' => ['middKurir']], function () {
    Route::get('/kurir', [KurirController::class, 'index']);
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [DashboardController::class, 'login'])->name('login');
    Route::get('/register', [DashboardController::class, 'register']);
    Route::post('/register', [DashboardController::class, 'createAnAccount']);
    Route::post('/login', [DashboardController::class, 'loginIntoAnAccount']);
});

Route::get('/pesan', [TransaksiController::class, 'index'])->name('pesan');
Route::group(['middleware' => ['middPembeli']], function () {
    Route::get('/pesan/{barang}', [TransaksiController::class, 'create']);
});

Route::get('/user', [DashboardController::class, 'showListUser']);
Route::post('/user/delete/{user}', [DashboardController::class, 'deleteUser']);
Route::get('/user/{user}', [DashboardController::class, 'showUser']);
Route::post('/user/{user}', [DashboardController::class, 'updateRoleUser']);

Route::get('/keranjang', [TransaksiController::class, 'showKeranjang']);
Route::get('/profile/{user}', [DashboardController::class, 'showProfile']);
Route::post('/profile/{user}', [DashboardController::class, 'updateProfile']);


Route::get('/logout', [DashboardController::class, 'logout']);




Route::get('/{err}', [NotFoundController::class, 'index']);
Route::get('/{err}/{err2}', [NotFoundController::class, 'index']);
Route::get('/{err}/{err2}/{err3}', [NotFoundController::class, 'index']);
