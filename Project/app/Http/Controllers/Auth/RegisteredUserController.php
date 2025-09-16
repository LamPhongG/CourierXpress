<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Hiển thị form đăng ký.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Xử lý đăng ký.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:20', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
            'name.required' => __('auth.name_required'),
            'email.required' => __('auth.email_required'),
            'email.email' => __('auth.email_invalid'),
            'email.unique' => __('auth.email_unique'),
            'phone.required' => __('auth.phone_required'),
            'phone.unique' => __('auth.phone_unique'),
            'password.required' => __('auth.password_required'),
            'password.confirmed' => __('auth.password_confirmed'),
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'user', // Mặc định là khách hàng
            'status' => 'active',
        ]);

        auth()->login($user);

        return redirect()->route('user.dashboard')->with('success', __('auth.register_success'));
    }
}