<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="modalRegister" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('register') }}" method="POST" id="formRegister">
                @csrf
                <input type="hidden" name="modal" value="register">
                <div class="modal-header">
                    <h5 class="modal-title ml-3">Đăng ký</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group mb-1">
                                    <label for="name">Họ và tên:</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control @error('name') is-invalid @enderror" placeholder=""
                                        value="{{ old('name') }}">
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
                                        value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group mb-1">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" placeholder="" value="{{ old('email') }}">
                                    @error('email')
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
                                        name="password" id="password" placeholder="" value="{{ old('password') }}">
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
                                        id="day">
                                        @foreach (range(1, 31) as $day)
                                            <option value="{{ $day }}"
                                                @if ($day == old('day', now()->day)) selected @endif>
                                                {{ str_pad($day, 2, '0', STR_PAD_LEFT) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mb-1">
                                    <select class="custom-select @error('day') is-invalid @enderror" name="month"
                                        id="month">
                                        @foreach (range(1, 12) as $month)
                                            <option value="{{ $month }}"
                                                @if ($month == old('month', now()->month)) selected @endif>
                                                {{ str_pad($month, 2, '0', STR_PAD_LEFT) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mb-1">
                                    <select class="custom-select @error('day') is-invalid @enderror" name="year"
                                        id="year">
                                        @foreach (range(now()->year - 80, now()->year) as $year)
                                            <option value="{{ $year }}"
                                                @if ($year == old('year', now()->year - 18)) selected @endif>
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
                                    @error('birthdate')
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
                                <div class="radio-cell">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender"
                                                id="genderMale" value="{{ config('constants.GENDER_MALE') }}"
                                                @if (!old('gender') || old('gender') == config('constants.GENDER_MALE')) checked @endif>
                                            Nam
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="radio-cell">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender"
                                                id="genderFemale" value="{{ config('constants.GENDER_FEMALE') }}"
                                                @if (old('gender') == config('constants.GENDER_FEMALE')) checked @endif>
                                            Nữ
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="radio-cell">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender"
                                                id="genderOther" value="{{ config('constants.GENDER_OTHER') }}"
                                                @if (old('gender') == config('constants.GENDER_OTHER')) checked @endif>
                                            Khác
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox"
                                        class="custom-control-input  @error('agree_terms') is-invalid @enderror"
                                        id="agree_terms" name="agree_terms">
                                    <label class="custom-control-label" for="agree_terms">Đồng ý với chính
                                        sách và điều khoản dịch vụ.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy bỏ</button>
                    <button type="submit" class="btn btn-success">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="registrationSuccessModal" tabindex="-1" aria-labelledby="registrationSuccessModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 pl-5 text-center" id="registrationSuccessModalLabel">Đăng ký thành
                    công!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">Cảm ơn bạn đã đăng ký.</p>
            </div>
        </div>
    </div>
</div>
@if ($errors->any() && old('modal') == 'register')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modalRegister = new bootstrap.Modal(document.querySelector('#modalRegister'));
            modalRegister.show();
        });
    </script>
@endif

@if (Session::has('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modalRegisterSuccess = new bootstrap.Modal(document.querySelector('#registrationSuccessModal'));
            modalRegisterSuccess.show();
        });
    </script>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formRegister = document.querySelector("#formRegister");

        formRegister.addEventListener("submit", () => {
            var day = document.querySelector('select[name="day"]').value;
            var month = document.querySelector('select[name="month"]').value;
            var year = document.querySelector('select[name="year"]').value;

            var input = document.createElement("input");
            input.type = "hidden";
            input.name = "birthdate";
            input.value = year + "-" + month + "-" + day;
            formRegister.appendChild(input);
        });
    });
</script>
