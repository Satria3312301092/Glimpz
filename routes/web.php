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
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\AdminDasborController;
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
use App\Http\Controllers\TambahServiceController;
use App\Http\Controllers\EditServiceController;
use App\Http\Controllers\ListServiceController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\MinServiceController;
use App\Http\Controllers\BannedController;


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


Route::middleware(['guest'])->group(function () {
    Route::get('/formlogin', [LoginController::class, 'form'])->name('formlogin');
    Route::post('/formlogin', [LoginController::class, 'form'])->name('formlogin')->middleware('check.banned');
    Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware('check.banned');
    Route::get('/', [Landing_PageController::class, 'landing_page']);
    Route::get('/daftar1', [DaftarGlimpzController::class, 'create'])->name('daftar1');
    Route::post('/daftar1', [DaftarGlimpzController::class, 'store'])->name('daftar1');

});

Route::middleware(['auth'])->group(function () {

    //BUYER
    Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda')->middleware('userAkses:Buyer');
    Route::resource('profilebuyer', ProfileBuyerController::class)->middleware('userAkses:Buyer');
    Route::resource('/listservice', ListServiceController::class)->middleware('userAkses:Buyer');
    Route::resource('/service', ServiceController::class);
    // Route::get('/service/{id}', [ServiceController::class, 'service'])->name('service');
    // Route::post('/service', [ServiceController::class, 'service'])->name('service_post');
    Route::resource('/orderpayment', OrderPaymentController::class,);
    Route::get('/sellerorder', [SellerOrderController::class, 'sellerorder']);


    //SELLER
    Route::get('/profileseller', [ProfileSellerController::class, 'profileseller'])->name('profileseller')->middleware('userAkses:Seller');
    Route::resource('sellerservice', MinServiceController::class)->middleware('userAkses:Seller');
    Route::resource('tambahservice', MinServiceController::class);
    Route::resource('editservice', MinServiceController::class);
    Route::resource('/profileseller', ProfileSellerController::class, )->middleware('userAkses:Seller');


    //ADMIN
    Route::resource('/admindasbor', AdminDasborController::class)->middleware('userAkses:Admin');
    Route::resource('/adminservice', AdminServiceController::class)->middleware('userAkses:Admin');
    Route::resource('/admininvoice', AdminInvoiceController::class)->middleware('userAkses:Admin');
    Route::resource('/adminuser', AdminUserController::class)->middleware('userAkses:Admin');
    Route::resource('/adminorder', AdminOrderController::class)->middleware('userAkses:Admin');
    Route::resource('/adminpayment', AdminPaymentController::class)->middleware('userAkses:Admin');


    Route::post('/logout', [logoutController::class, 'logout'])->name('logout');
    // Route::get('/profilebuyer', [ProfileBuyerController::class, 'profilebuyer'])->name('profilebuyer')->middleware('userAkses:Buyer');
   
    // Route::put('/profilebuyer/{{Id_User}}', [ProfileBuyerController::class, 'profilebuyer'])->name('profilebuyer')->middleware('userAkses:Buyer');
   
    // Route::post('/profilebuyer', [ProfileBuyerController::class, 'profilebuyer'])->name('profilebuyer')->middleware('userAkses:Buyer');
   
    Route::get('/home', function () {
    return redirect('/beranda');
    });
});







// Route::middleware(['guest'])->group(function (){
//     Route::get('/form', [LoginController::class, 'form']);
//     Route::post('/login', [LoginController::class, 'login']);
// });


// Route::get('/dashboard', [DashboardController::class, 'dashboard']);
// Route::get('/listitem', [ListItemJasaController::class, 'listitem']);
// Route::get('/pembayaran', [PembayaranController::class, 'pembayaran']);




// Route::get('/login', [LoginGlimpzController::class, 'loginglimpz']);
// Route::get('/daftar2', [DaftarGlimpzController::class, 'daftar2']);




// Route::get('/sellerservice', [SellerServiceController::class, 'sellerservice']);

// Route::get('/editservice', [EditServiceController::class, 'editservice']);


// Route::get('/listservice', [ListServiceController::class, 'show']);


//service proses

 // Route::get('sellerservice', [MinServiceController::class, 'index']);
 


















// Route::get('/listbarang112', [ListBarangController112::class, 'listbarang112']);
// Route::get('/listbarang091', [ListBarangController091::class, 'listbarang091']);
// Route::get('/listbarang092', [ListBarangController092::class, 'listbarang092']);
// Route::get('/listbarang105', [ListBarangController105::class, 'listbarang105']);
// Route::get('/listbarang108', [ListBarangController108::class, 'listbarang108']);
// Route::get('/listproduct', [ListProduct092Controller::class, 'list']);
