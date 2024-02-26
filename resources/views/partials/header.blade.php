<header>
    <div class="container bg-red">
        <div class="row">
            <div class="col-md-2 my-3 d-flex justify-content-md-end justify-content-center align-items-center">
                <a href="{{ route('index') }}">
                    <img class="img-fluid" width="90px" src="{{ asset('logo.png') }}" alt="logo">
                </a>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="{{ route('search') }}" class="w-100" method="GET">
                    <div class="input-group">
                        <input type="text" name="keyword" id="keyword" class="form-control"
                            placeholder="Nhập nội dung tìm kiếm" value="{{ request()->keyword }}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-search btn-dark">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 my-3 d-flex align-items-start justify-content-end">
                <div class="flex-column">
                    @if (Auth::check())
                        <div class="d-flex flex-row mb-3">
                            <a href="{{ route('account') }}" class="btn-black d-block btn btn-dark mr-2 px-2">Tài
                                khoản</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn-black btn btn-dark px-2">Đăng xuất</button>
                            </form>
                        </div>
                        <div class="d-flex flex-row justify-content-center">
                            <a href="{{ route('cart') }}" class="btn position-relative text-white">
                                <i class="fa-fw fa-sharp fa-regular fa-cart-shopping" style="font-size: 24px"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success"
                                    style="right: 1px">
                                    {{ Auth::user()->cart->products->count() }}
                                </span>
                            </a>
                        </div>
                    @else
                        <!-- Button trigger modal login -->
                        <button type="button" class="btn-black btn btn-dark mr-2 px-2" data-toggle="modal"
                            data-target="#modalLogin">
                            Đăng nhập
                        </button>

                        <!-- Button trigger modal register -->
                        <button type="button" class="btn-black btn btn-dark px-2" data-toggle="modal"
                            data-target="#modalRegister">
                            Đăng ký
                        </button>
                        @include('modals.login')
                        @include('modals.register')
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
