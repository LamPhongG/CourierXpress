<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\TrackingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

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
    return view('home');
})->name('home');

Route::get('/tracking', [PageController::class, 'tracking'])->name('tracking.page');

// ===== AUTHENTICATION & LANGUAGE =====
Route::get('language/{locale}', [LanguageController::class, 'changeLanguage'])->name('language.change');
require __DIR__.'/auth.php';

// ===== PUBLIC SERVICE ROUTES =====
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

// ===== AUTHENTICATED ROUTES =====
Route::middleware(['auth'])->group(function () {
    
    // General dashboard (redirects based on role)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ----- USER ROLE -----
    Route::middleware(['role:user'])->prefix('user')->name('user.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'userDashboard'])->name('dashboard');
        Route::get('/profile', function() { return view('user.profile'); })->name('profile');
        Route::get('/tracking', function() { return view('user.tracking'); })->name('tracking');
        
        // User Order Management
        Route::get('/orders', function() { return view('user.orders.index'); })->name('orders.index');
        Route::get('/orders/create', function() { return view('user.orders.create'); })->name('orders.create');
        Route::get('/orders/{order}', function() { return view('user.orders.show'); })->name('orders.show');
    });

    // ----- ADMIN ROLE -----
    Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('dashboard');
        Route::get('/tracking', function() { return view('admin.tracking'); })->name('tracking');
        Route::get('/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
        Route::get('/orders', function() { return view('admin.orders.index'); })->name('orders');
        Route::get('/agents', function() { return view('admin.agents.index'); })->name('agents');
        Route::get('/shippers', function() { 
            // Get shippers data directly for the view
            $shippers = \App\Models\User::where('role', 'shipper')
                          ->select(['id', 'name', 'email', 'phone', 'status', 'created_at'])
                          ->orderBy('created_at', 'desc')
                          ->get()
                          ->map(function ($shipper) {
                              // Calculate statistics
                              $totalOrders = \App\Models\Order::where('shipper_id', $shipper->id)->count();
                              $completedOrders = \App\Models\Order::where('shipper_id', $shipper->id)
                                                    ->where('status', 'delivered')
                                                    ->count();
                              $successRate = $totalOrders > 0 ? round(($completedOrders / $totalOrders) * 100, 1) : 0;

                              return [
                                  'id' => $shipper->id,
                                  'name' => $shipper->name,
                                  'email' => $shipper->email,
                                  'phone' => $shipper->phone ?? 'Chưa cập nhật',
                                  'area' => 'Miền Nam', // Default area - should be from profile
                                  'rating' => 4.5, // Default rating - should be calculated
                                  'status' => $shipper->status ?? 'active',
                                  'total_orders' => $totalOrders,
                                  'success_rate' => $successRate,
                                  'vehicle_type' => 'motorcycle', // Default - should be from profile
                                  'vehicle_number' => 'Chưa cập nhật', // Should be from profile
                                  'avatar' => '/images/default-avatar.png'
                              ];
                          });
            
            return view('admin.shippers.index', compact('shippers'));
        })->name('shippers');
        Route::get('/reports', function() { return view('admin.reports.index'); })->name('reports');
        Route::get('/settings', function() { return view('admin.settings.index'); })->name('settings');
        Route::get('/audit', function() { return view('admin.audit.index'); })->name('audit');
    });

    // ----- AGENT ROLE -----
    Route::middleware(['role:agent'])->prefix('agent')->name('agent.')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Agent\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/tracking', function() { return view('agent.tracking'); })->name('tracking');
        Route::get('/orders', [\App\Http\Controllers\Agent\OrderController::class, 'index'])->name('orders.index');
        Route::get('/orders/{id}', [\App\Http\Controllers\Agent\OrderController::class, 'show'])->name('orders.show');
        Route::get('/shippers', [\App\Http\Controllers\Agent\ShipperController::class, 'index'])->name('shippers');
        Route::get('/reports', [\App\Http\Controllers\Agent\ReportController::class, 'index'])->name('reports');
    });

    // ----- SHIPPER ROLE -----
    Route::middleware(['role:shipper'])->prefix('shipper')->name('shipper.')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Shipper\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/tracking', function() { return view('shipper.tracking'); })->name('tracking');
        Route::get('/orders', [\App\Http\Controllers\Shipper\OrderController::class, 'index'])->name('orders');
        Route::get('/history', [\App\Http\Controllers\Shipper\HistoryController::class, 'index'])->name('history');
    });
});


// ===== DEVELOPMENT-ONLY ROUTES =====
if (app()->environment(['local', 'development'])) {
    Route::prefix('dev')->name('dev.')->group(function () {
        Route::get('/test', fn() => 'Server hoạt động tốt!');
        Route::get('/phpinfo', fn() => phpinfo());

        Route::get('/test-agents-api', function () {
            try {
                $agents = \App\Models\User::where('role', 'agent')
                         ->select(['id', 'name', 'email', 'phone', 'address', 'status', 'city', 'created_at'])
                         ->orderBy('created_at', 'desc')
                         ->get()
                         ->map(fn ($agent) => [
                             'id' => $agent->id,
                             'name' => $agent->name,
                             'address' => $agent->address ?? 'Chưa cập nhật',
                             'manager' => $agent->name,
                             'phone' => $agent->phone ?? 'Chưa cập nhật',
                             'email' => $agent->email,
                             'status' => $agent->status ?? 'active',
                             'created_at' => $agent->created_at->format('d/m/Y')
                         ]);
                return response()->json($agents);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'message' => 'Lỗi: ' . $e->getMessage()], 500);
            }
        })->name('test-agents-api');

        Route::get('/test-reports-api', function () {
            try {
                return response()->json([
                    'success' => true,
                    'data' => [
                        'summary' => ['total_orders' => 1250, 'total_revenue' => 58300000, 'success_rate' => 95.5, 'average_delivery_time' => 28],
                        'revenue_chart' => ['labels' => ['T1', 'T2', 'T3'], 'revenue' => [12, 19, 3]],
                        'orders_chart' => ['labels' => ['T1', 'T2', 'T3'], 'completed' => [150, 200, 180], 'failed' => [10, 5, 8]],
                        'area_performance' => [85, 92, 78],
                    ],
                ]);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'message' => 'Lỗi: ' . $e->getMessage()], 500);
            }
        })->name('test-reports-api');
        
        // Test route for shippers data
        Route::get('/test-shippers-api', function () {
            try {
                $shippers = \App\Models\User::where('role', 'shipper')
                              ->select(['id', 'name', 'email', 'phone', 'status', 'created_at'])
                              ->orderBy('created_at', 'desc')
                              ->get()
                              ->map(function ($shipper) {
                                  // Calculate statistics
                                  $totalOrders = \App\Models\Order::where('shipper_id', $shipper->id)->count();
                                  $completedOrders = \App\Models\Order::where('shipper_id', $shipper->id)
                                                        ->where('status', 'delivered')
                                                        ->count();
                                  $successRate = $totalOrders > 0 ? round(($completedOrders / $totalOrders) * 100, 1) : 0;

                                  return [
                                      'id' => $shipper->id,
                                      'name' => $shipper->name,
                                      'email' => $shipper->email,
                                      'phone' => $shipper->phone ?? 'Chưa cập nhật',
                                      'area' => 'Miền Nam', // Default area - should be from profile
                                      'rating' => 4.5, // Default rating - should be calculated
                                      'status' => $shipper->status ?? 'active',
                                      'total_orders' => $totalOrders,
                                      'success_rate' => $successRate,
                                      'vehicle_type' => 'motorcycle', // Default - should be from profile
                                      'vehicle_number' => 'Chưa cập nhật', // Should be from profile
                                      'avatar' => '/images/default-avatar.png'
                                  ];
                              });

                return response()->json($shippers);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'message' => 'Lỗi: ' . $e->getMessage()], 500);
            }
        })->name('test-shippers-api');
    });
}