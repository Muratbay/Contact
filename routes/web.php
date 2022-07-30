<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormsController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/forms', [FormsController::class, 'index'])->name('index');
Route::post('/create', [FormsController::class, 'store'])->name('create');
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'auth'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/auth', [AuthController::class, 'index'])->name('auth');
Route::post('/store', [AuthController::class, 'store'])->name('store');

Route::get('/admin',[AdminController::class,'index'])->name('index');
Route::post('/admin',[AdminController::class,'destroy'])->name('destroy');