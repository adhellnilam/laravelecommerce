<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\categoriecontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\transactioncontroller;
use App\Http\Controllers\usercontroller;

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

Route::get('/', function () {
    return view('home',[
        "title"=>"home"
    ]);
})->name('home');

Route::get('/web', function () {
    return view('layout.web',[
        "title"=>"dashboard"
    ]);
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard',[
        "title"=>"dashboard"
    ]);
})->name('dashboard');

Route::get('/kategori',[categoriecontroller::class, 'index']);
Route::get('/kategori-create',[categoriecontroller::class, 'store']);

//produk
Route::get('/produk',[productcontroller::class, 'index']);
Route::get('/produk/add_produk',[productcontroller::class, 'create']);
Route::post('/produk/add_produk',[productcontroller::class, 'store']);
Route::get('/produk/detail/{id}',[productcontroller::class,'show']);
Route::delete('/produk/destroy/{id}',[productcontroller::class,'destroy']);
Route::get('/produk/update_data/{id}',[productcontroller::class,'edit']);
Route::post('/produk/update_data/{id}',[productcontroller::class,'update']);

//user
Route::get('/user',[usercontroller::class, 'index']);
Route::get('/user/add_user',[usercontroller::class, 'create']);
Route::post('/user/add_user',[usercontroller::class, 'store']);
Route::get('/user/detail/{id}',[usercontroller::class,'show']);
Route::delete('user/destroy/{id}',[usercontroller::class,'destroy']);
Route::get('user/update_data/{id}',[usercontroller::class,'edit']);
Route::post('user/update_data/{id}',[usercontroller::class,'update']);

//admin
Route::get('/admin',[admincontroller::class, 'index']);
Route::get('/admin/add_admin',[admincontroller::class, 'create']);
Route::post('/admin/add_admin',[admincontroller::class, 'store']);
Route::get('/admin/detail/{id}',[admincontroller::class,'show']);
Route::delete('admin/destroy/{id}',[admincontroller::class,'destroy']);
Route::get('admin/update_data/{id}',[admincontroller::class,'edit']);
Route::post('admin/update_data/{id}',[admincontroller::class,'update']);

//transaksi
Route::get('/transaksi',[transactioncontroller::class, 'index']);
Route::get('/transaksi/add_transaksi',[transactioncontroller::class, 'create']);
Route::post('/transaksi/add_transaksi',[transactioncontroller::class, 'store']);
Route::get('/transaksi/detail/{id}',[transactioncontroller::class,'show']);
Route::delete('transaksi/destroy/{id}',[transactioncontroller::class,'destroy']);
Route::get('transaksi/update_data/{id}',[transactioncontroller::class,'edit']);
Route::post('transaksi/update_data/{id}',[transactioncontroller::class,'update']);