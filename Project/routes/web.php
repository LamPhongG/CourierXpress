<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;


// Trang chủ
Route::get('/', function () {
    return view('home');
});

// Route tracking
Route::get('/tracking', function (Request $request) {
    $id = $request->get('tracking_id'); // lấy giá trị từ input name="tracking_id"
    return view('tracking', ['id' => $id]);
})->name('tracking');

// Auth routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Xử lý đăng nhập
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

// Xử lý đăng ký
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
