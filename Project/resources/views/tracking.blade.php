@extends('layouts.app')

@section('content')
    <div class="text-center mt-12">
        <h1 class="text-4xl font-bold text-orange-600 mb-6">Kết quả theo dõi</h1>
        <p>Mã theo dõi: {{ $id }}</p>
        <!-- Hiển thị thông tin chi tiết về mã theo dõi ở đây -->
    </div>
@endsection