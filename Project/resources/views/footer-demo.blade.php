@extends('layouts.app')

@section('content')
<div class="pt-20 min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-orange-600 to-orange-700 text-white py-20">
        <div class="container mx-auto px-6">
            <div class="text-center">
                <h1 class="text-5xl font-bold mb-6">✅ Footer Ahamove Style Hoàn Thành!</h1>
                <p class="text-xl mb-8 max-w-3xl mx-auto">Footer mới với đầy đủ chức năng như Ahamove: App Store Links, thông tin công ty, và liên kết mạng xã hội</p>
                
                <!-- Feature List -->
                <div class="bg-white bg-opacity-20 p-6 rounded-lg max-w-4xl mx-auto">
                    <h3 class="text-lg font-bold mb-4">🌟 Tính năng footer mới:</h3>
                    <div class="grid md:grid-cols-2 gap-4 text-left">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-300 mr-2"></i>
                            <span>📱 2 ảnh App Store & Google Play</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-300 mr-2"></i>
                            <span>🏢 Thông tin công ty chi tiết</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-300 mr-2"></i>
                            <span>🌍 Hỗ trợ đa ngôn ngữ (VI/EN)</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-300 mr-2"></i>
                            <span>📍 3 văn phòng: HCM, HN, ĐN</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-300 mr-2"></i>
                            <span>🔗 Liên kết mạng xã hội</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-300 mr-2"></i>
                            <span>✅ Chứng nhận doanh nghiệp</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Demo Content -->
    <div class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center">
                <h2 class="text-4xl font-bold mb-6 text-gray-800">Xem Footer Bên Dưới! 👇</h2>
                <p class="text-xl text-gray-600 mb-8">Footer được áp dụng cho tất cả các trang sử dụng layout app.blade.php và unified.blade.php</p>
                
                <!-- Current Language Display -->
                <div class="bg-orange-50 p-6 rounded-lg max-w-md mx-auto">
                    <h3 class="text-lg font-bold mb-2 text-gray-800">🌍 Ngôn ngữ hiện tại:</h3>
                    <p class="text-2xl font-bold text-orange-600">
                        @if(Session::get('locale', 'vi') == 'vi')
                            Vietnam - Tiếng Việt 🇻🇳
                        @elseif(Session::get('locale', 'vi') == 'en')
                            Vietnam - English 🇺🇸
                        @else
                            Vietnam - हिंदी 🇮🇳
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection