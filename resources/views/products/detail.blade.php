@extends('layouts.app')

@section('title')
    {{ $product->name }}
@endsection

@section('scripts')
    @vite('resources/js/detail.js')
@endsection

@section('content')
    <div class="container my-2 bg-opaque">
        <div class="row">
            <div class="col">
                <nav class="breadcrumb pl-0 pb-0" style="background-color: rgba(0, 0, 0, 0);" aria-label="breadcrumb">
                    <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Trang chủ</a>
                    <span class="breadcrumb-item active">Chi tiết sản phẩm</span>
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
        <div class="row p-3">
            <div class="col-5">
                <img class="img-fluid img-thumbnail" src="{{ asset('images/products/' . $product->image) }}" alt="Sản phẩm">
            </div>
            <div class="col-7">
                <div class="row">
                    <div class="col">
                        <h5>{{ $product->name }}</h5>
                    </div>
                </div>
                <div class="row mt-2 mb-4">
                    <div class="col">
                        <span style="font-size: 28px;"
                            class="text-danger">{{ number_format($product->price, 0, ',', '.') . ' đ' }}</span>
                    </div>
                </div>
                <div class="border border-success">
                    <div class="row mt-2 mb-2 ml-2">
                        <div class="col">
                            <h6>Quà tặng</h6>
                        </div>
                    </div>
                    <div class="row ml-2">
                        <div class="col" style="line-height: 10px;">
                            <p>Miễn phí vệ sinh laptop trong 1 năm</p>
                        </div>
                    </div>
                    <div class="row ml-2">
                        <div class="col" style="line-height: 10px;">
                            <p>Giảm giá 10% khi mua Gaming Gear</p>
                        </div>
                    </div>
                    <div class="row ml-2">
                        <div class="col" style="line-height: 10px;">
                            <p>Hỗ trợ cài phần mềm trọn đời</p>
                        </div>
                    </div>
                </div>
                <form action="{{ route('cartitems.add') }}" method="POST" id="formAddItem">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                    <div class="row my-5">
                        <div class="col">
                            <div class="btn-group">
                                <button type="button" id="decreaseBtn" class="btn btn-danger">
                                    <i class="fa-fw fa-regular fa-minus"></i>
                                </button>
                                <input type="number" style="width: 60px;" class="form-control text-center" name="quantity"
                                    value="1" min="1" max="50" readonly>
                                <button type="button" id="increaseBtn" class="btn btn-danger">
                                    <i class="fa-fw fa-regular fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-2">
                            <button type="submit" class="btn btn-success mr-2" value="buyNow">Mua ngay</button>
                            <button type="submit" class="btn btn-outline-success" value="addToCart">Thêm vào giỏ
                                hàng</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <h5>CHI TIẾT SẢN PHẨM</h5>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    @php
                        function getName($name)
                        {
                            switch ($name) {
                                case 'screen':
                                    return 'Màn hình';
                                    break;
                                case 'disk':
                                    return 'Ổ cứng';
                                    break;
                                case 'weight':
                                    return 'Trọng lượng';
                                    break;
                                case 'type':
                                    return 'Loại';
                                    break;
                                case 'reliability':
                                    return 'Độ bền';
                                    break;
                                case 'connect':
                                    return 'Kết nối';
                                    break;
                                case 'gate':
                                    return 'Cổng';
                                    break;
                                default:
                                    return strtoupper($name);
                                    break;
                            }
                        }
                    @endphp
                    <tbody>
                        @foreach ($product->descriptions as $description)
                            <tr>
                                <td style="width: 20%;">{{ getName($description->name) }}</td>
                                <td>{{ $description->value }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addItemSuccessModal" tabindex="-1" aria-labelledby="addItemSuccessModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 pl-5 text-center" id="addItemSuccessModalLabel">Thêm sản phẩm thành
                        công!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center">Sản phẩm đã được thêm vào giỏ hàng.</p>
                </div>
            </div>
        </div>
    </div>
    @if (Session::has('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var modalAddItemSuccess = new bootstrap.Modal(document.querySelector('#addItemSuccessModal'));
                modalAddItemSuccess.show();
            });
        </script>
    @endif
@endsection
