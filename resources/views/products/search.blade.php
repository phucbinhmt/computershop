@extends('layouts.app')

@section('title')
    Tìm kiếm
@endsection

@section('scripts')
    @vite('resources/js/product.js')
@endsection

@section('content')
    <div class="container my-2 bg-opaque">
        <div class="row">
            <div class="col">
                <nav class="breadcrumb pl-0 pb-0" style="background-color: rgba(0, 0, 0, 0);" aria-label="breadcrumb">
                    <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Trang chủ</a>
                    <span class="breadcrumb-item active">Tìm kiếm</span>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col p-0">
                <img class="img-fluid" src="{{ asset('images/banners/banner-phu-kien.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- Danh sach -->
    <div class="container mb-2 bg-opaque">
        <div class="row pt-3">
            <div class="col-6 col-md-9 d-flex justify-content-start">
                <div class="bg-red" style="width: 125px; height: 42px; color: #FFFFFF; text-align: center;">
                    <h5 class="mt-2">Tìm kiếm</h5>
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex justify-content-end">
                <form action="" class="w-100" method="GET" id="formSort">
                    @if (request()->keyword)
                        <input type="hidden" name="keyword" value="{{ request()->keyword }}">
                    @endif
                    <select class="form-control" name="sort_price" id="sort_price">
                        <option value="">Sắp xếp</option>
                        <option value="asc" @if (request()->sort_price == 'asc') selected @endif>
                            Giá tăng dần</option>
                        <option value="desc" @if (request()->sort_price == 'desc') selected @endif>
                            Giá giảm dần</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="row pt-3 d-flex justify-content-center">
            @forelse ($listProduct as $product)
                <div class="col-lg-3 col-md-4 col-6 mb-3 px-0">
                    <div class="card">
                        <a href="{{ route('detail', ['productId' => $product->product_id]) }}">
                            <img class="card-img-top img-fluid px-4" src="{{ asset('images/products/' . $product->image) }}"
                                alt="image">
                        </a>
                        <div class="card-body">
                            <a href="{{ route('detail', ['productId' => $product->product_id]) }}" style="min-height: 72px;"
                                title="{{ $product->name }}">{{ $product->name }}</a>
                            <h5>
                                <span
                                    class="badge badge-danger mt-3">{{ number_format($product->price, 0, ',', '.') . ' đ' }}
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
            @empty
                <h4 class="my-5">Không tìm thấy sản phẩm phù hợp</h4>
            @endforelse
        </div>
    </div>
@endsection
