<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin_dashboard');

