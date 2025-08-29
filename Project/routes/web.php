<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Trang chủ
Route::get('/', function () {
    return view('home');
});

// Route tracking
Route::get('/tracking', function (Request $request) {
    $id = $request->get('tracking_id'); // lấy giá trị từ input name="tracking_id"
    return view('tracking', ['id' => $id]);
})->name('tracking');


