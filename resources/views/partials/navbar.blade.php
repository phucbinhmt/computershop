<!-- start navbar -->
<div class="container bg-black">
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNav"
            aria-controls="collapsibleNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-regular fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNav">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                <li class="nav-item mr-4">
                    <a class="nav-link" href="{{ route('index') }}">Trang chủ<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="{{ route('pc') }}">PC Gaming</a>
                </li>
                <li class="nav-item mr-4 dropdown">
                    <div class="btn-group">
                        <a href="{{ route('laptop') }}" class="nav-link">Laptop</a>
                        <a href="#" class="nav-link dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('laptop', ['supplier' => 'asus']) }}">Laptop
                                Asus</a>
                            <a class="dropdown-item" href="{{ route('laptop', ['supplier' => 'dell']) }}">Laptop
                                Dell</a>
                            <a class="dropdown-item" href="{{ route('laptop', ['supplier' => 'hp']) }}">Laptop HP</a>
                            <a class="dropdown-item" href="{{ route('laptop', ['supplier' => 'lenovo']) }}">Laptop
                                Lenovo</a>
                            <a class="dropdown-item" href="{{ route('laptop', ['supplier' => 'lg']) }}">Laptop LG</a>
                            <a class="dropdown-item" href="{{ route('laptop', ['supplier' => 'msi']) }}">Laptop MSI</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-4 dropdown">
                    <div class="btn-group">
                        <a href="{{ route('accessory') }}" class="nav-link">Phụ kiện</a>
                        <a href="#" class="nav-link dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('accessory', ['category' => 'keyboard']) }}">Bàn
                                phím</a>
                            <a class="dropdown-item" href="{{ route('accessory', ['category' => 'mouse']) }}">Chuột</a>
                            <a class="dropdown-item" href="{{ route('accessory', ['category' => 'headphone']) }}">Tai
                                nghe</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="{{ route('about') }}">Giới thiệu</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- end navbar -->
