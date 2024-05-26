<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
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
    return view('welcome');
});
Route::get('/tes',function(){
    echo "Hello Word";
} );
Route::get('endpoint-produk', [ProdukController::class, 'index'])->name('endpoint-produk');
Route::get('halaman1', [ProdukController::class, 'halaman1'])->name('halaman1');
Route::get('produk', [ProdukController::class, 'produk'])->name('produk');
Route::get('cek-plat/{angka}', [ProdukController::class, 'cek_plat'])->name('cek-plat');
Route::get('form-angka', [ProdukController::class, 'form_angka'])->name('form-angka');
Route::post('form-action', [ProdukController::class, 'form_action'])->name('form-action');
Route::get('form-tagihan', [ProdukController::class, 'form_tagihan'])->name('form-tagihan');
Route::get('form-actionTagihan', [ProdukController::class, 'form_actionTagihan'])->name('form-actionTagihan');



