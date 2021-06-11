<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\PembeliController;

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
    return view('index');
});

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/store', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/logins', [LoginController::class, 'login']);

Route::get('/mobil/{id}', [PembeliController::class, 'getMobil']);
Route::get('/infomobil/{id}/{moid}', [PembeliController::class, 'infoMobil']);
Route::get('/topup/{id}', [PembeliController::class, 'topup']);
Route::post('/insertsaldo', [PembeliController::class, 'insertSaldo']);
Route::get('/checkout/{id}/{moid}', [PembeliController::class, 'checkout']);
Route::post('/belimobil', [PembeliController::class, 'belimobil']);
Route::get('/history/{id}', [PembeliController::class, 'getHistory']);

Route::get('/inputMobil/{id}', [PenjualController::class, 'inputMobil']);
Route::post('/insertMobil', [PenjualController::class, 'insertMobil']);
Route::post('/deleteMobil', [PenjualController::class, 'deleteMobil']);
Route::get('/editMobil/{id}/{moid}', [PenjualController::class, 'editMobil']);
Route::post('/updateMobil', [PenjualController::class, 'updateMobil']);
Route::get('/history/{id}', [PenjualController::class, 'getHistory']);

Route::get('/penjual/{id}', [PenjualController::class, 'CookiesPenjual']);
Route::get('/pembeli/{id}', [PembeliController::class, 'CookiesPembeli']);
