<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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
    return view('welcome');
});

Route::get('/register', [UserController::class, 'index'])->name('register.register');
Route::post('/register', [UserController::class, 'registerPost'])->name('register.register');
Route::get('/dashboard', [DashboardController::class, 'display'])->name('dashboard.dashboard');
Route::post('/dashboard',[DashboardController::class,'loginPost'])->name('dashboard');

Route::get('/home',[HomeController::class,'index'])->middleware('auth');


