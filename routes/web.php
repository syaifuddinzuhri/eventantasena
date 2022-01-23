<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CabangLombaFiqsiController;
use App\Http\Controllers\CabangLombaGatraController;
use App\Http\Controllers\CabangLombaIscController;
use App\Http\Controllers\CabangLombaOsirisController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KategoriFiqsiController;
use App\Http\Controllers\KategoriGatraController;
use App\Http\Controllers\KategoriIscController;
use App\Http\Controllers\KategoriOsirisController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\User\HomeController;
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

Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('auth.show.login');
    Route::post('login', [AuthController::class, 'login'])->name('auth.login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('profil', [DashboardController::class, 'showProfil'])->name('show.profil');
    Route::post('profil/save', [DashboardController::class, 'saveProfil'])->name('save.profil');
    Route::get('admin/kontak', [DashboardController::class, 'showKontak'])->name('admin.show.kontak');
    Route::put('admin/update/jadwal/{id}', [JadwalController::class, 'update'])->name('admin.update.jadwal');
    Route::post('admin/kontak/save', [DashboardController::class, 'saveKontak'])->name('admin.save.kontak');
    Route::resource('partner', PartnerController::class);
    Route::resource('sponsor', SponsorController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('jadwal', JadwalController::class);
    Route::resource('kategori/isc', KategoriIscController::class);
    Route::resource('kategori/fiqsi', KategoriFiqsiController::class);
    Route::resource('kategori/osiris', KategoriOsirisController::class);
    Route::resource('kategori/gatra', KategoriGatraController::class);
    Route::resource('cabang/isc', CabangLombaIscController::class, [
        'as' => 'cabang'
    ]);
    Route::resource('cabang/fiqsi', CabangLombaFiqsiController::class, [
        'as' => 'cabang'
    ]);
    Route::resource('cabang/osiris', CabangLombaOsirisController::class, [
        'as' => 'cabang'
    ]);
    Route::resource('cabang/gatra', CabangLombaGatraController::class, [
        'as' => 'cabang'
    ]);
});

Route::get('/', [HomeController::class, 'home'])->name('user.home');
Route::get('/berkas', [HomeController::class, 'berkas'])->name('user.berkas');
Route::get('/user/galeri', [HomeController::class, 'galeri'])->name('user.galeri');
Route::get('/user/jadwal', [HomeController::class, 'jadwal'])->name('user.jadwal');
Route::get('/registrasi', [HomeController::class, 'registrasi'])->name('user.registrasi');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('user.kontak');
Route::get('/fiqsi', [HomeController::class, 'fiqsi'])->name('user.fiqsi');
Route::get('/gatra', [HomeController::class, 'gatra'])->name('user.gatra');
Route::get('/isc', [HomeController::class, 'isc'])->name('user.isc');
Route::get('/osiris', [HomeController::class, 'osiris'])->name('user.osiris');
