<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="hidden" name="modal" value="login">
                <div class="modal-header">
                    <h5 class="modal-title ml-3">Đăng nhập</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        @error('failed')
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                </div>
                            </div>
                        @enderror
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group mb-1">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email" placeholder="" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12">
                                <div class="form-group mb-1">
                                    <label for="password">Mật khẩu:</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" placeholder="">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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

@if ($errors->any() && old('modal') == 'login')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modalLogin = new bootstrap.Modal(document.querySelector('#modalLogin'));
            modalLogin.show();
        });
    </script>
@endif
