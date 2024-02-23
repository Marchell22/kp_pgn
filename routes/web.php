<?php

use App\Http\Controllers\DenahKeduaController;
use App\Http\Controllers\DenahKeempatController;
use App\Http\Controllers\DenahKelimaController;
use App\Http\Controllers\DenahKetigaController;
use App\Http\Controllers\DenahPertamaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Models\denahData;


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
//     return view('main');
// });
Route::get('/',[HomeController::class,'landing'])->name('home');



Route::get('/login',[loginController::class,'login'])->name('login');
Route::post('/login-proses',[loginController::class,'login_proses'])->name('login-proses');
Route::get('/logout',[loginController::class,'logout'])->name('logout');
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'web', 'cekRole:admin'], 'as' => 'admin.'], function(){
    Route::get('/user', [HomeController::class, 'index'])->name('index');
    Route::get('/create', [HomeController::class, 'create'])->name('user.create');
    Route::post('/store', [HomeController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
    Route::put('/update/{id}', [HomeController::class, 'update'])->name('user.update');
    Route::get('/cancel-edit', [HomeController::class, 'cancelEdit'])->name('user.cancelEdit');
    Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');
    Route::get('/dashboard', [HomeController::class, 'userDashboard'])->name('pegawai.dashboard');
    Route::get('/denahPertama', [DenahPertamaController::class, 'indexDenahPertama'])->name('pegawai.denahPertama');
    Route::post('/submitDenahPertama', [DenahPertamaController::class, 'submitDenahPertama'])->name('submitDenahPertama'); 
    Route::get('/denahkedua', [DenahKeduaController::class, 'indexDenahKedua'])->name('pegawai.denahKedua');
    Route::post('/submitDenahKedua', [DenahKeduaController::class, 'submitDenahKedua'])->name('submitDenahKedua');
    Route::get('/denahPertama/getDataPertama', [DenahPertamaController::class, 'getDataPertama']);
    Route::get('/denahKedua/getData', [DenahKeduaController::class, 'getData']);
    Route::get('/denahkeempat', [DenahKeempatController::class, 'indexDenahKeempat'])->name('pegawai.denahKeempat');
    Route::post('/submitDenahKeempat', [DenahKeempatController::class, 'submitDenahKeempat'])->name('submitDenahKeempat');
    Route::get('/denahKeempat/getDataKeempat', [DenahKeempatController::class, 'getDataKeempat']);
    Route::get('/denahKetiga', [DenahKetigaController::class, 'indexDenahKetiga'])->name('pegawai.denahKetiga'); 
    Route::get('/denahKelima', [DenahKelimaController::class, 'indexDenahKelima'])->name('pegawai.denahKelima'); 
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'web', 'cekRole:user'], 'as' => 'admin.'], function(){
    Route::get('/indexKarywan', [HomeController::class, 'indexKaryawan'])->name('karyawan.indexKaryawan');
    Route::get('/denahPertamaKaryawan', [DenahPertamaController::class, 'denahKaryawanPertama'])->name('karyawan.denahKaryawanPertama');
    Route::get('/denahKeduaKaryawan', [DenahKeduaController::class, 'denahKaryawanKedua'])->name('karyawan.denahKaryawanKedua');
    Route::get('/denahPertamaKaryawan/getDataPertama', [DenahPertamaController::class, 'getDataPertama']);
    Route::get('/denahKeduaKaryawan/getData', [DenahKeduaController::class, 'getData']);
    Route::get('/denahKeempatKaryawan', [DenahKeempatController::class, 'denahKaryawanKeempat'])->name('karyawan.denahKaryawanKeempat');
    Route::get('/denahKeempatKaryawan/getDataKeempat', [DenahKeempatController::class, 'getDataKeempat']);
    Route::get('/denahKetigaKaryawan', [DenahKetigaController::class, 'denahKaryawanKetiga'])->name('karyawan.denahKaryawanKetiga');
    Route::get('/denahKelimaKaryawan', [DenahKelimaController::class, 'denahKaryawanKelima'])->name('karyawan.denahKaryawanKelima'); 
    
     
});

