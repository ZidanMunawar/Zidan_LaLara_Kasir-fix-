<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;

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

// Halaman biodata
Route::get('/biodata', function () {
    return view('biodata', [
        'nama' => 'Zean',
        'alamat' => 'bandung',
        'hobi' => 'Roblox'
    ]);
});

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'cek_login']);

// Hanya bisa diakses jika sudah login
Route::middleware(['auth'])->group(function () {
    // Dashboard Admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    // Dashboard Kasir
    Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index');

    // Logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
