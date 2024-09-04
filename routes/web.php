<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PromoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//login
Route::get('/login',[AuthController::class, 'login']);
Route::get('/register',[AuthController::class, 'register']);
Route::post('/register',[AuthController::class, 'signup']);
Route::post('/auth', [AuthController::class, 'auth']);
Route::get('/logout',[AuthController::class, 'logout']);     
//landing
Route::get('/',[UserController::class, 'index']);
Route::middleware(['status'])->group(function(){

    Route::middleware(['admin'])->group(function(){

        //dashboard
        Route::get('/dashboard',[AdminController::class, 'index']);
    
        //pesanan
        Route::get('/pesanan',[PesananController::class, 'show']);
        
        // merek
        Route::get('/merek',[MerekController::class, 'index']);
        Route::post('/create-merek', [MerekController::class, 'create']);
        Route::get('/edit-merek/{id}',[MerekController::class, 'edit']);
        Route::post('/edit-merek/{id}',[MerekController::class, 'update']);
        Route::get('/delete-merek/{id}',[MerekController::class, 'delete']);
        
        //kategori
        Route::get('/kategori',[KategoriController::class, 'index']);
        Route::post('/create-kategori', [KategoriController::class, 'create']);
        Route::get('/delete-kategori/{id}',[KategoriController::class, 'delete']);
        Route::get('/edit-kategori/{id}',[KategoriController::class, 'edit']);
        Route::post('/edit-kategori/{id}',[KategoriController::class, 'update']);
        
        //slider
        Route::get('/slider',[PromoController::class, 'index']);
        Route::post('/create-slider',[PromoController::class, 'create']);
        Route::get('/update-slider/{id}',[PromoController::class, 'edit']);
        Route::post('/update-slider/{id}',[PromoController::class, 'update']);
        
        //produk
        Route::get('/produk',[ProdukController::class, 'index']);
        Route::get('/produk-add',[ProdukController::class, 'create']);
        Route::post('/create-produk',[ProdukController::class, 'add']);
        Route::get('/update-produk/{id}',[ProdukController::class, 'edit']);
        Route::post('/update-produk/{id}',[ProdukController::class, 'update']);
        Route::get('/delete-produk/{id}',[ProdukController::class, 'delete']);
    });


    //search
    Route::post('/search',[UserController::class, 'search']);
    //keranjang
    Route::post('/cart/{produk:id}', [KeranjangController::class, 'addchart'])->name('cart.add');
    Route::get('/delete-cart/{id}',[KeranjangController::class, 'delete']);

    //produk-user
    Route::get('/detail-produk/{id}',[UserController::class, 'detail']);

    //checkout
    Route::get('/checkout/{id}',[PesananController::class, 'index']);
    Route::post('/checkout/proccess', [PesananController::class, 'checkoutProcess']);

    //check
    Route::get('/check/{id}',[PesananController::class, 'check']);
});