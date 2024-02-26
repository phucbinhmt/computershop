<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Cart;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if (!$user || !Hash::check($validatedData['password'], $user->password)) {
            return back()->withErrors(['failed' => 'Sai tên đăng nhập hoặc mật khẩu'])->withInput($request->except('password'));
        }

        Auth::login($user);
        return redirect()->route('index');
    }

    public function register(UserRequest $request)
    {
        $request->merge([
            'password' => Hash::make($request->password),
        ]);
        
        $user = User::create($request->all());
        Cart::create([
            'user_id' => $user->user_id,
        ]);

        return back()->with([
            'success' => 'Đăng ký thành công',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function error403()
    {
        return view('403');
    }
}
