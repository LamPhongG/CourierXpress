@extends('layouts.app')

@section('content')
<div class="min-h-screen">
    <div class="text-center py-20">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">CourierXpress Footer Demo</h1>
        <p class="text-xl text-gray-600 mb-8">Scroll down to see the Ahamove-style footer</p>
        
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                <h2 class="text-2xl font-semibold mb-4">Dịch vụ của chúng tôi</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center p-6 border rounded-lg">
                        <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Giao hàng nhanh</h3>
                        <p class="text-gray-600">Giao hàng trong ngày, cam kết thời gian chính xác</p>
                    </div>
                    
                    <div class="text-center p-6 border rounded-lg">
                        <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">An toàn tuyệt đối</h3>
                        <p class="text-gray-600">Bảo hiểm toàn diện, đảm bảo hàng hóa luôn an toàn</p>
                    </div>
                    
                    <div class="text-center p-6 border rounded-lg">
                        <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Theo dõi realtime</h3>
                        <p class="text-gray-600">Theo dõi đơn hàng mọi lúc, mọi nơi với ứng dụng</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-semibold mb-4">Tại sao chọn CourierXpress?</h2>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Mạng lưới tài xế rộng khắp cả nước
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Công nghệ hiện đại, ứng dụng thân thiện
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Giá cả cạnh tranh, minh bạch
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Hỗ trợ khách hàng 24/7
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
