<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListItemJasaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ListBarangController112;
use App\Http\Controllers\ListBarangController091;
use App\Http\Controllers\ListBarangController092;
use App\Http\Controllers\ListBarangController105;
use App\Http\Controllers\ListBarangController108;
use App\Http\Controllers\BerandaCotroller;
use App\Http\Controllers\AdminDasborCotroller;
use App\Http\Controllers\Landing_PageController;
use App\Http\Controllers\List_ServicerController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LoginGlimpzController;
use App\Http\Controllers\DaftarGlimpzController;
use App\Http\Controllers\DaftarGlimpz1Controller;
use App\Http\Controllers\AdminInvoiceController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminPaymentController;
use App\Http\Controllers\OrderPaymentController;
use App\Http\Controllers\ProfileBuyerController;
use App\Http\Controllers\ProfileSellerController;
use App\Http\Controllers\SellerServiceController;
use App\Http\Controllers\SellerOrderController;
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
Route::get('/pembayaran', [PembayaranController::class, 'pembayaran']);
Route::get('/beranda', [BerandaCotroller::class, 'beranda']);
Route::get('/admindasbor', [AdminDasborCotroller::class, 'admindasbor']);
Route::get('/landingpage', [Landing_PageController::class, 'landing_page']);
Route::get('/listservice', [List_ServicerController::class, 'list_service']);
Route::get('/adminservice', [AdminServiceController::class, 'adminservice']);
Route::get('/service', [ServiceController::class, 'service']);
Route::get('/login', [LoginGlimpzController::class, 'loginglimpz']);
Route::get('/daftar1', [DaftarGlimpzController::class, 'daftar1']);
Route::get('/daftar2', [DaftarGlimpz1Controller::class, 'daftar2']);
Route::get('/admininvoice', [AdminInvoiceController::class, 'admininvoice']);
Route::get('/adminuser', [AdminUserController::class, 'adminuser']);
Route::get('/adminorder', [AdminOrderController::class, 'adminorder']);
Route::get('/adminpayment', [AdminPaymentController::class, 'adminpayment']);
Route::get('/orderpayment', [OrderPaymentController::class, 'orderpayment']);
Route::get('/profilebuyer', [ProfileBuyerController::class, 'profilebuyer']);
Route::get('/profileseller', [ProfileSellerController::class, 'profileseller']);
Route::get('/sellerservice', [SellerServiceController::class, 'sellerservice']);
Route::get('/sellerorder', [SellerOrderController::class, 'sellerorder']);

Route::get('/listbarang112', [ListBarangController112::class, 'listbarang112']);
Route::get('/listbarang091', [ListBarangController091::class, 'listbarang091']);
Route::get('/listbarang092', [ListBarangController092::class, 'listbarang092']);
Route::get('/listbarang105', [ListBarangController105::class, 'listbarang105']);
Route::get('/listbarang108', [ListBarangController108::class, 'listbarang108']);
Route::get('/listproduct', [ListProduct092Controller::class, 'list']);
