@extends('layouts.app')

@section('title')
    Giới thiệu
@endsection

@section('content')
    <div class="container my-2 bg-opaque">
        <div class="row">
            <div class="col">
                <nav class="breadcrumb pl-0 pb-0" style="background-color: rgba(0, 0, 0, 0);" aria-label="breadcrumb">
                    <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Trang chủ</a>
                    <span class="breadcrumb-item active">Giới thiệu</span>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col p-0">
                <img class="img-fluid" src="{{ asset('images/banners/banner-phu-kien.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container mb-2 bg-opaque px-5">
        <div class="row">
            <div class="col">
                <h3 class="mt-3 text-center">Giới thiệu</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Chào mừng anh/chị đến với trang web của tôi!</p>
                <p>Tôi là Lê Phúc Bình, sinh viên năm cuối chuyên ngành Khoa học Máy tính tại trường Đại học Công nghiệp
                    TP.Hồ Chí Minh. Trang web của tôi được tạo ra với mục đích chính là vận dụng những kỹ năng lập trình mà
                    tôi đã tích lũy
                    được, nhằm đáp ứng đầy đủ và chân thực nhất yêu cầu của công ty về chương trình thực tập. </p>
                <p>Thực tập tại công ty của anh/chị là cơ hội lý tưởng để tôi không chỉ làm quen với môi trường làm việc
                    chuyên
                    nghiệp mà anh/chị đang xây dựng, mà còn để áp dụng những kiến thức đã học vào thực tế và phát triển bản
                    thân. Tôi tự tin rằng sẽ đem lại giá trị gia tăng và tích cực cho đội ngũ của công ty.</p>
                <p>Rất mong có cơ hội được thực tập tại công ty, tôi cam kết sẽ hết sức nỗ lực và tận dụng mọi cơ hội để
                    đóng góp cho sự thành công của dự án và đồng đội. Cảm ơn anh/chị đã xem xét đơn của tôi và tôi rất mong
                    được hồi âm từ phía anh/chị.</p>
                <p>Cảm ơn anh/chị đã ghé thăm trang web của tôi.</p>
            </div>
        </div>

        <div class="row mt-3 justify-content-center">
            <div class="col-6">
                <div class="row justify-content-end">
                    <div class="col-8">
                        <img src="{{ asset('images/lephucbinh_cv.jpg') }}" class="img-fluid img-thumbnail"
                            alt="Lê Phúc Bình">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row mt-3">
                    <div class="col-12">
                        <h5>Thông tin</h5>
                    </div>
                    <div class="col-12">
                        <p class="m-1">Họ và tên: Lê Phúc Bình</p>
                    </div>
                    <div class="col-12">
                        <p class="m-1">Điện thoại: 0978964219</p>
                    </div>
                    <div class="col-12">
                        <p class="m-1">Email: phucbinhmt@gmail.com</p>
                    </div>
                    <div class="col-12">
                        <p class="m-1">Địa chỉ: 21/1K Nguyễn Ảnh Thủ, Bà Điểm, Hóc Môn, TP.HCM</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <h5>Kỹ năng</h5>
                    </div>
                    <div class="col-12">
                        <p class="m-1">Ngôn ngữ: PHP, Python, Java, Javascript, HTML, CSS</p>
                    </div>
                    <div class="col-12">
                        <p class="m-1">Framework: Laravel, Flask, Bootstrap, Tensorflow, Keras</p>
                    </div>
                    <div class="col-12">
                        <p class="m-1">Database: MySQL, SQL Server</p>
                    </div>
                    <div class="col-12">
                        <p class="m-1">Cloud: AWS</p>
                    </div>
                    <div class="col-12">
                        <p class="m-1">Tool: VS Code, Selenium, Postman</p>
                    </div>
                    <div class="col-12">
                        <p class="m-1">Kỹ năng phân tích và thiết kế hệ thống, thiết kế cơ sở dữ liệu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
