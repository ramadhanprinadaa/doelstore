<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', function () {
    abort(404);
});

Route::get('/admin', function () {
    return "Halo Admin Doelstore";
})->middleware('role:admin');

Route::get('/produk', function () {
    return "Semua user bisa lihat produk";
})->middleware('role:admin,investor,tamu');