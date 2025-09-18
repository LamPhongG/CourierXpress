<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Hiển thị danh sách tất cả người dùng.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Lấy tất cả người dùng từ cơ sở dữ liệu, sắp xếp theo ID mới nhất
        $users = User::latest()->paginate(15); // Phân trang, 15 người dùng mỗi trang

        // Trả về view 'admin.users.index' và truyền biến 'users' vào đó
        return view('admin.users.index', compact('users'));
    }
}