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

Route::get('/', function () {
    return view('userpage.userhome');
});

Route::get('/shop', function () {
    return view('userpage.shop');
});

Route::get('/cart', function () {
    return view('userpage.cart');
});

Route::get('/checkout', function () {
    return view('userpage.checkout');
});

Route::get('/contact', function () {
    return view('userpage.contact');
});

Route::get('/detail', function () {
    return view('userpage.detail');
});

Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'store']);

Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'store']);

Route::get('logout', [LoginController::class, 'logout'])->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'admin']);

Route::resource('/DataProduk', DataProdukController::class);

Route::resource('/kategori', KategoriController::class);


