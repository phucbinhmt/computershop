<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartItemsController extends Controller
{
    public function add(Request $request)
    {
        $cart = Auth::user()->cart;
        $cartItem = $cart->products()->wherePivot('product_id', $request->product_id)->first();

        if ($cartItem) {
            $cart->products()->updateExistingPivot($request->product_id, ['quantity' => $cartItem->pivot->quantity + $request->quantity]);
        } else {
            $cart->products()->attach($request->product_id, ['quantity' => $request->quantity]);
        }

        if ($request->submit_value == 'buyNow') {
            return redirect()->route('cart');
        }
        return back()->with([
            'success' => "Thêm sản phẩm thành công!"
        ]);
        
    }
    public function update(Request $request, $productId)
    {
        $cart = Auth::user()->cart;
        $cart->products()->updateExistingPivot($productId, ['quantity' => $request->quantity]);
        return back();
    }
    public function delete($productId)
    {
        $cart = Auth::user()->cart;
        $cart->products()->detach($productId);
        return back();
    }
}
