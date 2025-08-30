@extends('layouts.app')

@section('content')
<div class="flex items-start justify-center min-h-screen bg-gray-100">
    <div class="text-center mt-12">
        <h1 class="text-5xl font-bold text-orange-600 mb-6">
           Welcome to CourierXpress
        </h1>
        
<div class="bg-gray-100 min-h-screen flex flex-col items-center pt-6">

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
