<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormsController;
use Illuminate\Support\Facades\Route;

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

