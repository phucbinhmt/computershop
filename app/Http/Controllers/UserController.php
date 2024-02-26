<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function cart()
    {
        $cart = Auth::user()->cart;
        return view('users.cart')->with([
            'products' => $cart->products,
        ]);
    }

    public function account()
    {
        return view('users.account');
    }

    public function update(UserRequest $request)
    {
        $request->merge([
            'password' => Hash::make($request->password),
        ]);

        $user = Auth::user();
        $user->update($request->except('user_id'));
        return back()->with([
            'success' => 'Cập nhật thành công!',
        ]);
    }
}
