@extends('layouts.app')

@section('title')
    PC Gamming
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
                    <span class="breadcrumb-item active">Laptop</span>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col p-0">
                <img class="img-fluid" src="{{ asset('images/banners/banner-asus.jpg') }}" alt="">
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
                <a href="{{ route('laptop', ['supplier' => 'asus']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 90px;">ASUS</button>
                </a>
                <a href="{{ route('laptop', ['supplier' => 'dell']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 90px;">DELL</button>
                </a>
                <a href="{{ route('laptop', ['supplier' => 'hp']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2 px-3" style="width: 90px;">HP</button>
                </a>
                <a href="{{ route('laptop', ['supplier' => 'lenovo']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 90px;">LENOVO</button>
                </a>
                <a href="{{ route('laptop', ['supplier' => 'lg']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2 px-3" style="width: 90px;">LG</button>
                </a>
                <a href="{{ route('laptop', ['supplier' => 'msi']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 90px;">MSI</button>
                </a>
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-3">
                <h6 class="">Loại CPU</h6>
            </div>
            <div class="col p-0">
                <a href="{{ route('laptop', ['cpu' => 'corei3']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 90px;">Core
                        i3</button>
                </a>
                <a href="{{ route('laptop', ['cpu' => 'corei5']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 90px;">Core
                        i5</button>
                </a>
                <a href="{{ route('laptop', ['cpu' => 'corei7']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2 px-3" style="width: 90px;">Core
                        i7</button>
                </a>
                <a href="{{ route('laptop', ['cpu' => 'ryzen5']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 90px;">Ryzen
                        5</button>
                </a>
                <a href="{{ route('laptop', ['cpu' => 'ryzen7']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2 px-3" style="width: 90px;">Ryzen
                        7</button>
                </a>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-3">
                <h6 class="">Dung lượng Ram</h6>
            </div>
            <div class="col p-0">
                <a href="{{ route('laptop', ['ram' => '4gb']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 90px;">4G</button>
                </a>
                <a href="{{ route('laptop', ['ram' => '8gb']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 90px;">8G</button>
                </a>
                <a href="{{ route('laptop', ['ram' => '16gb']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2 px-3" style="width: 90px;">16G</button>
                </a>
                <a href="{{ route('laptop', ['ram' => '32gb']) }}">
                    <button type="button" class="btn btn-outline-dark mr-3 mb-2" style="width: 90px;">32G</button>
                </a>
            </div>
        </div>
    </div>
    <!-- Danh sach -->
    <div class="container mb-2 bg-opaque">
        <div class="row pt-3">
            <div class="col-6 col-md-9 d-flex justify-content-start">
                <div class="bg-red" style="width: 125px; height: 42px; color: #FFFFFF; text-align: center;">
                    <h5 class="mt-2">Laptop</h5>
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex justify-content-end">
                <form action="" class="w-100" method="GET" id="formSort">
                    @if (request()->cpu)
                        <input type="hidden" name="cpu" value="{{ request()->cpu }}">
                    @endif
                    @if (request()->supplier)
                        <input type="hidden" name="supplier" value="{{ request()->supplier }}">
                    @endif
                    @if (request()->ram)
                        <input type="hidden" name="ram" value="{{ request()->ram }}">
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
            @forelse ($listLaptop as $product)
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
