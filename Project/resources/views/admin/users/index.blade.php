
@extends('layouts.unified')

@section('title', 'Admin - Quản lý Người dùng | CourierXpress')

@section('navigation')
    <a href="/admin/dashboard" class="text-gray-700 hover:text-red-600">Dashboard</a>
    <a href="/admin/orders" class="text-gray-700 hover:text-red-600">Đơn hàng</a>
    <a href="/admin/agents" class="text-gray-700 hover:text-red-600">Chi nhánh</a>
    <a href="/admin/shippers" class="text-gray-700 hover:text-red-600">Shipper</a>
    <a href="/admin/users" class="text-red-600 font-medium">Người dùng</a>
    <a href="/admin/reports" class="text-gray-700 hover:text-red-600">Báo cáo</a>
    <a href="/admin/settings" class="text-gray-700 hover:text-red-600">Cài đặt</a>
@endsection

@section('content')
    <!-- Page Header -->
    <div class="mb-6">
        <div class="flex justify-between items-center">
            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-orange-500">
                <h2 class="text-3xl font-bold text-orange-600">Quản lý Người dùng</h2>
                <p class="mt-2 text-lg font-medium text-gray-700">Xem và quản lý tất cả người dùng trong hệ thống.</p>
            </div>
            {{-- Optional: Add button to create new user --}}
            {{-- <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-plus mr-2"></i> Thêm người dùng
            </a> --}}
        </div>
    </div>

    <!-- Users Table -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Danh sách người dùng</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <tr>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Tên</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-center">Vai trò</th>
                        <th class="py-3 px-6 text-center">Ngày tạo</th>
                        <th class="py-3 px-6 text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm font-light">
                    {{-- Loop through users passed from controller --}}
                    @isset($users)
                    @forelse ($users as $user)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">{{ $user->id }}</td>
                            <td class="py-3 px-6 text-left">{{ $user->name }}</td>
                            <td class="py-3 px-6 text-left">{{ $user->email }}</td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-blue-200 text-blue-800 py-1 px-3 rounded-full text-xs">{{ $user->role }}</span>
                            </td>
                            <td class="py-3 px-6 text-center">{{ $user->created_at->format('d/m/Y') }}</td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <a href="#" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">Không có người dùng nào.</td>
                        </tr>
                    @endforelse
                    @else
                        <tr>
                            <td colspan="6" class="text-center py-4 text-red-500">Biến $users không được truyền tới view.</td>
                        </tr>
                    @endisset
                </tbody>
            </table>
        </div>
    </div>
@endsection