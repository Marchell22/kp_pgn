<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;

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

Route::get('/login',[loginController::class,'login'])->name('auth.login');;

Route::get('/user',[HomeController::class,'index'])->name('index');
Route::get('/create',[HomeController::class,'create'])->name('user.create');

Route::post('/store',[HomeController::class,'store'])->name('user.store');

Route::get('/edit/{id}',[HomeController::class,'edit'])->name('user.edit');
Route::put('/update/{id}',[HomeController::class,'update'])->name('user.update');
Route::get('/cancel-edit', [HomeController::class, 'cancelEdit'])->name('user.cancelEdit');
Route::delete('/delete/{id}',[HomeController::class, 'delete'])->name('user.delete');
