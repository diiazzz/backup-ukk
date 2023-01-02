<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataProdukController;
use App\Http\Controllers\KategoriController;


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


// Route frontend index user
Route::get('/', function () {
    return view('frontend.pages.index');
});

// Route Auth
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'admin']);

// Route Admin Managements
Route::resource('dataProduk', DataProdukController::class)->middleware('admin');
Route::resource('kategori', KategoriController::class)->middleware('admin');
