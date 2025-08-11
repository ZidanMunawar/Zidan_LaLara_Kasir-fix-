<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/login', [LoginController::class, 'index']);
//cek login
Route::post('/login', [LoginController::class, 'cek_login']);
