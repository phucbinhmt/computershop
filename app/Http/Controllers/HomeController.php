<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $listPC = Product::where('category_id', config('constants.CATEGORY_PC'))->limit(8)->get();
        $listLaptop = Product::where('category_id', config('constants.CATEGORY_LAPTOP'))->limit(8)->get();
        $listAccessory = Product::whereIn('category_id', [
            config('constants.CATEGORY_KEYBOARD'),
            config('constants.CATEGORY_HEADPHONE'),
            config('constants.CATEGORY_MOUSE'),
        ])->limit(8)->get();
        return view('index')->with([
            'listPC' => $listPC,
            'listLaptop' => $listLaptop,
            'listAccessory' => $listAccessory,
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
