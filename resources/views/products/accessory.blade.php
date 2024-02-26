@extends('layouts.app')

@section('title')
    Phụ kiện
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
                    <span class="breadcrumb-item active">Phụ kiện</span>
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
        <div class="row pt-3">
            <div class="col d-flex justify-content-center justify-content-md-start">
                <h5>Tìm kiếm</h5>
            </div>
        </div>
        <div class="row mt-3 mb-1">
            <div class="col-3">
                <h6 class="">Tên thương hiệu</h6>
            </div>
            <div class="col p-0">
                <a href="{{ route('accessory', ['supplier' => 'akko']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 90px;">AKKO</button>
                </a>
                <a href="{{ route('accessory', ['supplier' => 'asus']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 90px;">ASUS</button>
                </a>
                <a href="{{ route('accessory', ['supplier' => 'logitech']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2 px-1"
                        style="width: 90px;">LOGITECH</button>
                </a>
                <a href="{{ route('accessory', ['supplier' => 'corsair']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 90px;">CORSAIR</button>
                </a>
                <a href="{{ route('accessory', ['supplier' => 'dareu']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 90px;">DAREU</button>
                </a>
                <a href="{{ route('accessory', ['supplier' => 'edra']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2 px-3" style="width: 90px;">E-DRA</button>
                </a>
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-3">
                <h6 class="">Loại bàn phím</h6>
            </div>
            <div class="col p-0">
                <a href="{{ route('accessory', ['type' => 'phimco']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 160px;">Bàn phím
                        cơ</button>
                </a>
                <a href="{{ route('accessory', ['type' => 'giaco']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 160px;">Bàn phím giả
                        cơ</button>
                </a>
                <a href="{{ route('accessory', ['type' => 'thuong']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2 px-3" style="width: 160px;">Bàn phím
                        thường</button>
                </a>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-3">
                <h6 class="">Khoảng giá</h6>
            </div>
            <div class="col p-0">
                <a href="{{ route('accessory', ['range' => '1']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2 px-3" style="width: 120px;">Dưới 1
                        triệu</button>
                </a>
                <a href="{{ route('accessory', ['range' => '2']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2 px-3" style="width: 140px;">1 triệu
                        - 5 triệu</button>
                </a>
                <a href="{{ route('accessory', ['range' => '3']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2 px-3" style="width: 120px;">Trên 5
                        triệu</button>
                </a>
            </div>
        </div>
    </div>
    <!-- Danh sach -->
    <div class="container mb-2 bg-opaque">
        <div class="row pt-3">
            <div class="col-6 col-md-9 d-flex justify-content-start">
                <div class="bg-red" style="width: 125px; height: 42px; color: #FFFFFF; text-align: center;">
                    <h5 class="mt-2">Phụ kiện</h5>
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex justify-content-end">
                <form action="" class="w-100" method="GET" id="formSort">
                    @if (request()->category)
                        <input type="hidden" name="category" value="{{ request()->category }}">
                    @endif
                    @if (request()->supplier)
                        <input type="hidden" name="supplier" value="{{ request()->supplier }}">
                    @endif
                    @if (request()->type)
                        <input type="hidden" name="type" value="{{ request()->type }}">
                    @endif
                    @if (request()->range)
                        <input type="hidden" name="range" value="{{ request()->range }}">
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
            @forelse ($listAccessory as $product)
                <div class="col-lg-3 col-md-4 col-6 mb-3 px-0">
                    <div class="card">
                        <a href="{{ route('detail', ['productId' => $product->product_id]) }}">
                            <img class="card-img-top img-fluid px-4"
                                src="{{ asset('images/products/' . $product->image) }}" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="{{ route('detail', ['productId' => $product->product_id]) }}"
                                style="min-height: 72px;" title="{{ $product->name }}">{{ $product->name }}</a>
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
