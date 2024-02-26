@extends('layouts.app')

@section('title')
    Tài khoản
@endsection

@section('scripts')
    @vite('resources/js/account.js')
@endsection

@section('content')
    <div class="container my-2 bg-opaque">
        <div class="row">
            <div class="col">
                <nav class="breadcrumb pl-0 pb-0" style="background-color: rgba(0, 0, 0, 0);" aria-label="breadcrumb">
                    <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Trang chủ</a>
                    <span class="breadcrumb-item active">Tài khoản</span>
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
        <div class="row pt-4">
            <div class="col">
                <h5 class="text-center">THÔNG TIN TÀI KHOẢN</h5>
            </div>
        </div>
        <form action="{{ route('update') }}" method="POST" id="formUpdate">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="col-6">
                    @php
                        $user = Auth::user();
                        $birthdateParse = \Carbon\Carbon::parse($user->birthdate);
                    @endphp
                    <!-- Start info -->
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group mb-1">
                                <label for="name">Họ và tên:</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror" placeholder=""
                                    value="{{ old('name', $user->name) }}" disabled>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group mb-1">
                                <label for="phone">Số điện thoại:</label>
                                <input type="text" name="phone" id="phone"
                                    class="form-control @error('phone') is-invalid @enderror" placeholder=""
                                    value="{{ old('phone', $user->phone) }}" disabled>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group mb-1">
                                <label for="password">Mật khẩu:</label>
                                <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="" value="{{ old('password') }}" disabled>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group mb-0">
                                <label for="">Ngày sinh:</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-4">
                            <div class="form-group mb-1">
                                <select class="custom-select @error('day') is-invalid @enderror" name="day"
                                    id="day" disabled>
                                    @foreach (range(1, 31) as $day)
                                        <option value="{{ $day }}"
                                            @if ($day == old('day', $birthdateParse->day)) selected @endif>
                                            {{ str_pad($day, 2, '0', STR_PAD_LEFT) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group mb-1">
                                <select class="custom-select @error('day') is-invalid @enderror" name="month"
                                    id="month" disabled>
                                    @foreach (range(1, 12) as $month)
                                        <option value="{{ $month }}"
                                            @if ($month == old('month', $birthdateParse->month)) selected @endif>
                                            {{ str_pad($month, 2, '0', STR_PAD_LEFT) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group mb-1">
                                <select class="custom-select @error('day') is-invalid @enderror" name="year"
                                    id="year" disabled>
                                    @foreach (range(now()->year - 80, now()->year) as $year)
                                        <option value="{{ $year }}"
                                            @if ($year == old('year', $birthdateParse->year)) selected @endif>
                                            {{ $year }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group mb-0">
                                @error('day')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group mb-0">
                                <label for="">Giới tính:</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-4">
                            <div class="radio-cell" style="background-color: #e9ecef;">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="gender" id="genderMale"
                                            value="{{ config('constants.GENDER_MALE') }}" disabled
                                            @if (old('gender', $user->gender) == config('constants.GENDER_MALE')) checked @endif>
                                        Nam
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="radio-cell" style="background-color: #e9ecef;">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="gender" id="genderFemale"
                                            value="{{ config('constants.GENDER_FEMALE') }}" disabled
                                            @if (old('gender', $user->gender) == config('constants.GENDER_FEMALE')) checked @endif>
                                        Nữ
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="radio-cell" style="background-color: #e9ecef;">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="gender" id="genderOther"
                                            value="{{ config('constants.GENDER_OTHER') }}" disabled
                                            @if (old('gender', $user->gender) == config('constants.GENDER_OTHER')) checked @endif>
                                        Khác
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End info --}}
                    <div class="form-row my-4">
                        <div class="col-12 text-center">
                            <button id="buttonUpdate" type="button" class="btn btn-info mr-2">Chỉnh sửa</button>
                            <button id="buttonCancel" type="button" class="d-none btn btn-danger mr-2"
                                style="width: 90px">Hủy bỏ</button>
                            <button type="submit" class="d-none btn btn-success">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="updateInfoSuccessModal" tabindex="-1" aria-labelledby="updateInfoSuccessModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 pl-5 text-center" id="updateInfoSuccessModalLabel">Cập nhật thành
                        công!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center">Thông tin tài khoản đã được cập nhật.</p>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var eventClick = new Event("click");
                document.querySelector("#buttonUpdate").dispatchEvent(eventClick);
            });
        </script>
    @endif

    @if (Session::has('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var modalUpdateInfo = new bootstrap.Modal(document.querySelector('#updateInfoSuccessModal'));
                modalUpdateInfo.show();
            });
        </script>
    @endif
@endsection
