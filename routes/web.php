<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListItemJasaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\Pembayaran;
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
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });


    Route::get('/users', function() {
        return 'Admin Users';
    });
});

//Route::get('/listbarang/{id}/{nama}', function($id, $nama) {
//    return view('list_barang', compact('id', 'nama'));
//});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::get('pembayaran/{id}/{nama}/{harga}', [Pembayaran::class, 'tampilkan']);