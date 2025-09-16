@extends('layouts.app')

@section('content')
<div class="flex items-start justify-center min-h-screen" style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.8)), linear-gradient(180deg, #87CEEB 0%, #98D8E8 20%, #B0E0E6 40%, #E0F6FF 60%, #F0F8FF 100%); background-attachment: fixed; position: relative;">
    
    <!-- Background elements mô phỏng ảnh giao hàng -->
    <div class="absolute inset-0 pointer-events-none" style="background-image: 
        radial-gradient(circle at 20% 70%, rgba(255, 153, 0, 0.3) 0%, transparent 15%),
        radial-gradient(circle at 80% 60%, rgba(255, 255, 255, 0.4) 0%, transparent 10%),
        linear-gradient(45deg, transparent 40%, rgba(139, 69, 19, 0.2) 45%, rgba(139, 69, 19, 0.2) 55%, transparent 60%),
        linear-gradient(90deg, transparent 0%, rgba(105, 105, 105, 0.1) 20%, rgba(105, 105, 105, 0.1) 80%, transparent 100%);
        background-size: 200px 200px, 100px 100px, 150px 100px, 100% 20px;
        background-position: 20% 70%, 80% 60%, 50% 65%, 0% 80%;
        animation: deliveryElementsAnimation 15s ease-in-out infinite;
        z-index: 1;">
    </div>
    
    <div class="text-center mt-12 relative z-10">
        <h1 class="text-5xl font-bold text-orange-600 mb-6">
           Welcome to CourierXpress
        </h1>
        
<div class="min-h-screen flex flex-col items-center pt-6" style="background: transparent;">

    {{-- 3 box menu --}}
    <div class="flex space-x-4 mb-8">
        <div class="bg-white shadow-lg px-6 py-6 text-center w-48 cursor-pointer hover:shadow-xl transition text-gray-800">
            <div class="text-3xl mb-2">🧾</div>
            <p class="font-bold text-sm">MỨC GIÁ &amp;<br>THỜI GIAN VẬN CHUYỂN</p>
        </div>

        {{-- THEO DÕI - đổi thành màu cam --}}
        <div class="bg-orange-600 shadow-lg px-6 py-6 text-center w-48 cursor-pointer hover:shadow-xl transition text-white">
            <div class="text-3xl mb-2">📦</div>
            <p class="font-bold text-sm">THEO DÕI</p>
        </div>

        <div class="bg-white shadow-lg px-6 py-6 text-center w-48 cursor-pointer hover:shadow-xl transition text-gray-800">
            <div class="text-3xl mb-2">🚚</div>
            <p class="font-bold text-sm">VẬN CHUYỂN</p>
        </div>
    </div>

    {{-- Form theo dõi --}}
    <form action="{{ route('tracking') }}" method="GET" class="flex">
        <input type="text" name="tracking_id" placeholder="Nhập ID theo dõi"
               class="px-4 py-3 w-96 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500">
        <button type="submit"
                class="bg-orange-600 text-white px-6 py-3 font-bold flex items-center justify-center hover:bg-orange-700 transition ">
            XEM →
        </button>
    </form>

</div>
    </div>
</div>


@endsection
