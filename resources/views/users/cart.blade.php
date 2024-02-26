@extends('layouts.app')

@section('title')
    Giỏ hàng
@endsection

@section('scripts')
    @vite('resources/js/cart.js')
@endsection

@section('content')
    <div class="container my-2 bg-opaque">
        <div class="row">
            <div class="col">
                <nav class="breadcrumb pl-0 pb-0" style="background-color: rgba(0, 0, 0, 0);" aria-label="breadcrumb">
                    <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Trang chủ</a>
                    <span class="breadcrumb-item active">Giỏ hàng</span>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col p-0">
                <img class="img-fluid" src="{{ asset('images/banners/banner-phu-kien.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container mb-2 bg-opaque">
        <div class="row mt-4 d-flex align-items-center border pt-3 pb-2 bg-warning">
            <div class="col-2 d-flex justify-content-center">
                <h6>Hình ảnh</h6>
            </div>
            <div class="col-2 d-flex justify-content-center">
                <h6>Tên sản phẩm</h6>
            </div>
            <div class="col-2 d-flex justify-content-center">
                <h6>Đơn giá</h6>
            </div>
            <div class="col-2 d-flex justify-content-center">
                <h6>Số lượng</h6>
            </div>
            <div class="col-2 d-flex justify-content-center">
                <h6>Số tiền</h6>
            </div>
            <div class="col-2 d-flex justify-content-center">
                <h6>Thao tác</h6>
            </div>
        </div>

        @php
            $totalCart = 0;
        @endphp

        @forelse ($products as $product)
            <div class="row d-flex align-items-center border">
                <div class="col-2 d-flex justify-content-center">
                    <img class="img-fluid" src="{{ asset('images/products/' . $product->image) }}" alt="Sản phẩm">
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <h6>{{ $product->name }}</h6>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <span>{{ number_format($product->price, 0, ',', '.') . ' đ' }}</span>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <form action="{{ route('cartitems.update', $product->product_id) }}" method="POST"
                        class="formUpdateItem">
                        @csrf
                        @method('PUT')
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger decreaseBtn">
                                <i class="fa-fw fa-regular fa-minus"></i>
                            </button>
                            <input type="number" style="width: 60px;" class="form-control text-center" name="quantity"
                                value="{{ $product->pivot->quantity }}" min="1" max="50" readonly>
                            <button type="button" class="btn btn-danger increaseBtn">
                                <i class="fa-fw fa-regular fa-plus"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    @php
                        $totalItem = $product->price * $product->pivot->quantity;
                        $totalCart += $totalItem;
                    @endphp
                    <span class="text-danger">{{ number_format($totalItem, 0, ',', '.') . ' đ' }}</span>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <form action="{{ route('cartitems.delete', $product->product_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger px-4">Xóa</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="row pt-2 d-flex justify-content-center">
                <h4 class="my-5">Không tìm thấy sản phẩm trong giỏ hàng</h4>
            </div>
        @endforelse

        <!-- Tong thanh toan -->
        <div class="row d-flex align-items-center border justify-content-end pt-2 pb-2">
            <div class="col-2 d-flex justify-content-center">
                <h6 class="m-0">Tổng thanh toán:</h6>
            </div>
            <div class="col-2 d-flex justify-content-center">
                <span class="text-danger">{{ number_format($totalCart, 0, ',', '.') . ' đ' }}</span>
            </div>
            <div class="col-2 d-flex justify-content-center">
                <button id="btnDatHang" type="button" class="btn btn-success px-4">Đặt hàng</button>
            </div>
        </div>
        <!-- end -->
    </div>
@endsection
