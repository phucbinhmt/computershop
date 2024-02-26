<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function pc(Request $request)
    {
        $listPC = Product::where('category_id', config('constants.CATEGORY_PC'));
        if ($request->cpu != null) {
            $listPC->where('supplier', $request->cpu);
        }
        if ($request->sort_price != null) {
            $listPC->orderBy('price', $request->sort_price);
        }
        $listPC = $listPC->get();
        return view('products.pc')->with([
            'listPC' => $listPC,
        ]);
    }

    public function laptop(Request $request)
    {

        $listLaptop = Product::where('category_id', config('constants.CATEGORY_LAPTOP'));
        if ($request->supplier != null) {
            $listLaptop->where('supplier', $request->supplier);
        }
        if ($request->cpu != null) {
            $listLaptop->whereHas('descriptions', function ($query) use ($request) {
                $query->where('name', 'cpu')->whereRaw("replace(value, ' ', '') like '%$request->cpu%'");
            });
        }
        if ($request->ram != null) {
            $listLaptop->whereHas('descriptions', function ($query) use ($request) {
                $query->where('name', 'ram')->whereRaw("regexp_replace(value, '\\\\(.*$', '') like '%$request->ram%'");
            });
        }
        if ($request->sort_price != null) {
            $listLaptop->orderBy('price', $request->sort_price);
        }
        $listLaptop = $listLaptop->get();
        return view('products.laptop')->with([
            'listLaptop' => $listLaptop,
        ]);
    }

    public function accessory(Request $request)
    {

        $listAccessory = Product::whereIn('category_id', [
            config('constants.CATEGORY_KEYBOARD'),
            config('constants.CATEGORY_MOUSE'),
            config('constants.CATEGORY_HEADPHONE'),
        ]);
        if ($request->category != null) {
            switch ($request->category) {
                case 'keyboard':
                    $listAccessory->where('category_id', config('constants.CATEGORY_KEYBOARD'));
                    break;
                case 'mouse':
                    $listAccessory->where('category_id', config('constants.CATEGORY_MOUSE'));
                    break;
                case 'headphone':
                    $listAccessory->where('category_id', config('constants.CATEGORY_HEADPHONE'));
                    break;
                default:
                    break;
            }
        }
        if ($request->supplier != null) {
            $listAccessory->where('supplier', $request->supplier);
        }
        if ($request->type != null) {
            $listAccessory->whereHas('descriptions', function ($query) use ($request) {
                $query->where('name', 'type')->whereRaw("replace(value, ' ', '') like '%$request->type%'");
            });
        }
        if ($request->range != null) {
            switch ($request->range) {
                case '1':
                    $listAccessory->where('price', '<', 1000000);
                    break;
                case '2':
                    $listAccessory->whereBetween('price', [1000000, 5000000]);
                    break;
                case '3':
                    $listAccessory->where('price', '>', 5000000);
                    break;
                default:
                    break;
            }
        }
        if ($request->sort_price != null) {
            $listAccessory->orderBy('price', $request->sort_price);
        }
        $listAccessory = $listAccessory->get();
        return view('products.accessory')->with([
            'listAccessory' => $listAccessory,
        ]);
    }

    public function search(Request $request)
    {
        $listProduct = Product::where('name', 'like', "%$request->keyword%");
        if ($request->sort_price != null) {
            $listProduct->orderBy('price', $request->sort_price);
        }
        $listProduct = $listProduct->get();
        return view('products.search')->with([
            'listProduct' => $listProduct,
        ]);
    }

    public function detail($productId)
    {
        $product = Product::find($productId);
        return view('products.detail')->with([
            'product' => $product,
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
