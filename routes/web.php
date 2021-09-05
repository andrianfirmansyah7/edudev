<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('katalog', [HomeController::class, 'katalog'])->name('katalog');
Route::get('tentang', [HomeController::class, 'tentang'])->name('tentang');

Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'show_by_admin'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('add', [DashboardController::class, 'add'])->name('add');
    Route::get('show', [DashboardController::class, 'show'])->name('show');
    Route::get('admin', [DashboardController::class, 'show_by_admin'])->name('admin');
    Route::get('detail/{id}', [DashboardController::class, 'detail'])->name('detail');
    Route::get('edit/{id}', [DashboardController::class, 'edit'])->name('edit');
    Route::get('delete/{id}', [DashboardController::class, 'delete'])->name('delete');  
    Route::post('add_process', [DashboardController::class, 'add_process'])->name('add_process');
    Route::post('edit_process', [DashboardController::class, 'edit_process'])->name('edit_process');
});



