@extends('layouts.app')

@section('title')
    Trang chủ
@endsection

@section('content')
    @include('partials.carousel')

    <div class="container mb-2 bg-opaque">
        <div class="row pt-3">
            <div class="col d-flex justify-content-center justify-content-md-start">
                <h5>Thương hiệu nổi bật</h5>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md-3 d-flex justify-content-center mb-3">
                <a href="{{ route('search', ['keyword' => 'msi']) }}">
                    <img class="img-fluid rounded" src="{{ asset('images/suppliers/hang-msi.webp') }}" alt="MSI">
                </a>
            </div>
            <div class="col-md-3 d-flex justify-content-center mb-3">
                <a href="{{ route('search', ['keyword' => 'hp']) }}">
                    <img class="img-fluid rounded" src="{{ asset('images/suppliers/hang-hp.webp') }}" alt="HP">
                </a>
            </div>
            <div class="col-md-3 d-flex justify-content-center mb-3">
                <a href="{{ route('search', ['keyword' => 'lg']) }}">
                    <img class="img-fluid rounded" src="{{ asset('images/suppliers/hang-lg.webp') }}" alt="LG">
                </a>
            </div>
            <div class="col-md-3 d-flex justify-content-center mb-3">
                <a href="{{ route('search', ['keyword' => 'lenovo']) }}">
                    <img class="img-fluid rounded" src="{{ asset('images/suppliers/hang-lenovo.webp') }}" alt="LENOVO">
                </a>
            </div>
        </div>
    </div>
    <!-- PC Gaming -->
    <div class="container mb-2 bg-opaque">
        <div class="row pt-3">
            <div class="col d-flex justify-content-center justify-content-md-start">
                <div class="bg-red" style="width: 125px; height: 42px; color: #FFFFFF; text-align: center;">
                    <h5 class="mt-2">PC Gaming</h5>
                </div>
            </div>
        </div>
        <div class="row pt-3 d-flex justify-content-center">
            @foreach ($listPC as $product)
                <div class="col-lg-3 col-md-4 col-6 mb-3 px-0">
                    <div class="card">
                        <a href="{{ route('detail', ['productId' => $product->product_id]) }}">
                            <img class="card-img-top img-fluid px-4" src="{{ asset('images/products/' . $product->image) }}"
                                alt="image">
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
            @endforeach
        </div>
    </div>
    <!-- Laptop -->
    <div class="container mb-2 bg-opaque">
        <div class="row pt-3">
            <div class="col d-flex justify-content-center justify-content-md-start">
                <div class="bg-red" style="width: 125px; height: 42px; color: #FFFFFF; text-align: center;">
                    <h5 class="mt-2">Laptop</h5>
                </div>
            </div>
        </div>
        <div class="row pt-3 d-flex justify-content-center">
            @foreach ($listLaptop as $product)
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
            @endforeach
        </div>
    </div>
    <!-- Phu kien -->
    <div class="container mb-2 bg-opaque">
        <div class="row pt-3">
            <div class="col d-flex justify-content-center justify-content-md-start">
                <div class="bg-red" style="width: 125px; height: 42px; color: #FFFFFF; text-align: center;">
                    <h5 class="mt-2">Phụ kiện</h5>
                </div>
            </div>
        </div>
        <div class="row pt-3 d-flex justify-content-center">
            @foreach ($listAccessory as $product)
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
            @endforeach
        </div>
    </div>
@endsection
