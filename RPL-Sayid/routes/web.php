<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


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
    return view('login');
});

Route::get('/register', [UserController::class, 'create']);
Route::post('/store', [UserController::class, 'store']);
Route::post('/logins', [UserController::class, 'login']);

Route::get('/mobil/{id}', [PembeliController::class, 'getMobil']);
Route::get('/infomobil/{id}/{moid}', [PembeliController::class, 'infoMobil']);
Route::get('/topup/{id}', [PembeliController::class, 'topup']);
Route::get('/tarik/{id}', [PembeliController::class, 'tarik']);
Route::post('/insertsaldo', [PembeliController::class, 'insertSaldo']);
Route::post('/tariksaldo', [PembeliController::class, 'tarikSaldo']);
Route::get('/checkout/{id}/{moid}', [PembeliController::class, 'checkout']);
Route::post('/belimobil', [PembeliController::class, 'belimobil']);
Route::get('/historyPembeli/{id}', [PembeliController::class, 'getHistory']);
Route::get('/wishlist/{id}/{moid}', [PembeliController::class, 'addWishlist']);
Route::get('/wish/{id}', [PembeliController::class, 'getWishlist']);
Route::get('/delwish/{id}/{wid}', [PembeliController::class, 'delWishlist']);
Route::get('/mobil/{id}/{tipe}', [PembeliController::class, 'filterCar']);

Route::get('/inputMobil/{id}', [PenjualController::class, 'inputMobil']);
Route::post('/insertMobil', [PenjualController::class, 'insertMobil']);
Route::post('/deleteMobil', [PenjualController::class, 'deleteMobil']);
Route::get('/editMobil/{id}/{moid}', [PenjualController::class, 'editMobil']);
Route::post('/updateMobil', [PenjualController::class, 'updateMobil']);
Route::get('/historyPenjual/{id}', [PenjualController::class, 'getHistory']);
Route::get('/tarikPenjual/{id}', [PenjualController::class, 'tarik']);
Route::post('/tariksaldoPenjual', [PenjualController::class, 'tarikSaldo']);

Route::get('/mobil', [AdminController::class, 'getMobil']);
Route::get('/history', [AdminController::class, 'getHistory']);

Route::get('/penjual/{id}', [PenjualController::class, 'CookiesPenjual']);
Route::get('/pembeli/{id}', [PembeliController::class, 'CookiesPembeli']);

Route::get('/admins', [AdminController::class, 'CookiesAdmin']);
Route::get('/editUser/{id}/', [AdminController::class, 'editUser']);
Route::post('/updateUser/{id}', [AdminController::class, 'updateUser']);
Route::post('/deleteUser/', [AdminController::class, 'deleteUser']);
