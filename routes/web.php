<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\list_productController;
use App\Http\Controllers\ListItemJasaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ListBarangController112;
use App\Http\Controllers\ListBarangController091;
use App\Http\Controllers\ListBarangController092;
use App\Http\Controllers\ListBarangController105;
use App\Http\Controllers\ListBarangController108;
use App\Http\Controllers\UserController;
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

Route::get('/login', [LoginController::class, 'login']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/listitem', [ListItemJasaController::class, 'listitem']);
Route::get('/list_product', [list_productController::class, 'list_product']);

Route::get('/listbarang112', [ListBarangController112::class, 'listbarang112']);
Route::get('/listbarang091', [ListBarangController091::class, 'listbarang091']);
Route::get('/listbarang092', [ListBarangController092::class, 'listbarang092']);
Route::get('/listbarang105', [ListBarangController105::class, 'listbarang105']);
Route::get('/listbarang108', [ListBarangController108::class, 'listbarang108']);
Route::middleware(['guest'])->group(function (){
    Route::get('/form', [UserController::class, 'form']);
    Route::post('/login', [UserController::class, 'login']);
});
Route::get('/home', function() {
    return redirect('/daftar');
});
Route::get('/daftar', [UserController::class, 'daftar']);
Route::get('/daftar2', [UserController::class, 'daftar2']);
?>