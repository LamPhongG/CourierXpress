<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;

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

// Language routes
Route::get('/language/{locale}', [LanguageController::class, 'changeLanguage'])->name('language.change');

// Language demo page
Route::get('/demo', function () {
    return view('language-demo');
})->name('language.demo');



// Full translation demo page
Route::get('/full-demo', function () {
    return view('full-translation-demo');
})->name('full.demo');

// Complete services demo with full translation
Route::get('/complete-demo', function () {
    return view('services.complete-demo');
})->name('complete.demo');

// Individual customer complete translation demo
Route::get('/individual-complete', function () {
    return view('customers.individual-complete');
})->name('individual.complete');

// All services with complete translation (like your image)
Route::get('/all-services', function () {
    return view('all-services-translated');
})->name('all.services');

// FedEx-style smart translation demo
Route::get('/fedex-style', function () {
    return view('fedex-style-demo');
})->name('fedex.style');

// Lalamove-style translation demo
Route::get('/lalamove-style', function () {
    return view('lalamove-style');
})->name('lalamove.style');

// Header one-line demo
Route::get('/header-demo', function () {
    return view('header-demo');
})->name('header.demo');

// Dropdown test page
Route::get('/dropdown-test', function () {
    return view('dropdown-test');
})->name('dropdown.test');

// Dịch vụ routes
Route::get('/dich-vu/giao-hang', [PageController::class, 'dichVuGiaoHang'])->name('dich-vu.giao-hang');
Route::get('/dich-vu/xe-tai', [PageController::class, 'dichVuXeTai'])->name('dich-vu.xe-tai');
Route::get('/dich-vu/chuyen-nha', [PageController::class, 'dichVuChuyenNha'])->name('dich-vu.chuyen-nha');
Route::get('/dich-vu/doanh-nghiep', [PageController::class, 'dichVuDoanhNghiep'])->name('dich-vu.doanh-nghiep');

// Khách hàng routes
Route::get('/khach-hang/ca-nhan', [PageController::class, 'khachHangCaNhan'])->name('khach-hang.ca-nhan');
Route::get('/khach-hang/doanh-nghiep', [PageController::class, 'khachHangDoanhNghiep'])->name('khach-hang.doanh-nghiep');
Route::get('/cong-dong/ho-tro', [PageController::class, 'congDongHoTro'])->name('cong-dong.ho-tro');

// Tài xế routes
Route::get('/tai-xe/dang-ky', [PageController::class, 'dangKyTaiXe'])->name('tai-xe.dang-ky');
Route::get('/tai-xe/cong-dong', [PageController::class, 'congDongTaiXe'])->name('tai-xe.cong-dong');
Route::get('/tai-xe/cam-nang', [PageController::class, 'camNangTaiXe'])->name('tai-xe.cam-nang');

// Hỗ trợ routes
Route::get('/ho-tro/khach-hang', [PageController::class, 'hoTroKhachHang'])->name('ho-tro.khach-hang');
Route::get('/ho-tro/tai-xe', [PageController::class, 'hoTroTaiXe'])->name('ho-tro.tai-xe');

// Tuyển dụng routes
Route::get('/tuyen-dung/ve-chung-toi', [PageController::class, 'veChungToi'])->name('tuyen-dung.ve-chung-toi');
Route::get('/tuyen-dung/cau-chuyen', [PageController::class, 'cauChuyenCourierXpress'])->name('tuyen-dung.cau-chuyen');
Route::get('/tuyen-dung/gia-nhap', [PageController::class, 'giaNhapCourierXpress'])->name('tuyen-dung.gia-nhap');
