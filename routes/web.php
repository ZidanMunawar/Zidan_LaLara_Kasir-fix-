<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
//Menampilkan Halaman Biodata dari biodata.blade.php
Route::get('/biodata', function () {
    return view('biodata', [
        'nama' => 'Zean',
        'alamat' => 'bandung',
        'hobi' => 'Roblox'
    ]);
});

//menampilkan login
Route::get('/login', [LoginController::class, 'index'])->name('login');
//cek login
Route::post('/login', [LoginController::class, 'cek_login']);
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
