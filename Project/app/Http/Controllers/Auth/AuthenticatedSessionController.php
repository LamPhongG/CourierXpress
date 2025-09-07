<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'phone' => ['required', 'string', 'min:10'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::attempt($request->only('phone', 'password'), $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors(['phone' => 'Thông tin đăng nhập không chính xác']);
    }
}
