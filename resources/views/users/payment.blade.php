@extends('layouts.app')

@section('title')
    Thanh toán
@endsection

@section('content')
    <div class="container my-2 bg-opaque">
        <div class="row">
            <div class="col">
                <nav class="breadcrumb pl-0 pb-0" style="background-color: rgba(0, 0, 0, 0);" aria-label="breadcrumb">
                    <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Trang chủ</a>
                    <span class="breadcrumb-item active">Thanh toán</span>
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
        <div class="row pt-2 d-flex justify-content-center">
            <h4 class="my-5">Chức năng này đang được phát triển. Vui lòng thử lại sau.</h4>
        </div>
    </div>
@endsection
