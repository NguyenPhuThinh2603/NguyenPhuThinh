<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('header')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


</head>
<body>
    <header>
        <header class="header">
            <div class="top-header">
                <div class="logo">
                    <img src="{{asset('images/logo/logo-01.png.webp')}}" alt="">
                </div>
                <div class="navBar">
                    <a href="{{ route('home')}}">Home</a>
                    <a href="{{ route('product') }}">Shop</a>
                    <a href="{{ route('accessory') }}">Accessory</a>
                    <a href="{{ route('post') }}">Post</a>
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('contact') }}">Contact</a>
                    <i class='bx bx-x' id="close"></i>
                </div>
                <div class="others">
                    <i class='bx bx-search-alt-2' ></i>
                    <a style="color: #0c0c0c;" href="{{ route('accessory') }}"><i class='bx bx-cart-alt'></i></a>
                    <i class='bx bx-heart' ></i>
                    <i class='bx bx-menu-alt-left' id="menuBar"></i>
                </div>
            </div>
            <div class="home">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide slide">
                            <div class="col-1">
                                <h4>Patek Philippe</h4>
                                <h2>Thiết kế thanh lịch, phong cách truyền thống</h2>
                                <button class="btn">Xem ngay</button>
                            </div>
                           
                      </div>
                      <div class="swiper-slide slide">
                            <div class="col-1">
                                <h4>Datejust</h4>
                                <h2>"Moonwatch" từ chương trình Apollo của NASA</h2>
                                <button class="btn">Xem ngay</button>
                            </div>
                            
                      </div>
                      <div class="swiper-slide slide">
                            <div class="col-1">
                                <h4>Vacheron Constantin</h4>
                                <h2>Đồng hồ với thiết kế tinh tế</h2>
                                <button class="btn">Xem ngay</button>
                            </div>
                           
                      </div>
                    </div>
                    <div class="swiper-button-next swiperBtn"></div>
                    <div class="swiper-button-prev swiperBtn"></div>
                  </div>
            </div>
        </header>
    
    </header>
    <main>
        <section class="banner">
            <div class="main-banner">
                <div class="banner_one">
                    <img src="{{asset('images/banner/banner2.jpeg')}}" alt="">
                    <div class="content">
                        <h3>Rolex</h3>
                        <span>Thương hiệu đồng hồ được thành lập vào năm 1919 bởi Hans Wilsdorf </span>
                    </div>
                    <div class="button">
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
                <div class="banner_one">
                    <img src="{{asset('images/banner/banner1.jpeg')}}" alt="">
                    <div class="content">
                        <h3>Patek Philippe</h3>
                        <span>Thương hiệu đến từ Thụy Sĩ được thành lập bởi Antoni Patek vào năm 1851</span>
                    </div>
                    <div class="button">
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
                <div class="banner_one">
                    <img src="{{asset('images/banner/banner3.jpeg')}}" alt="">
                    <div class="content">
                        <h3>Phụ kiện đồng hồ</h3>
                        <span>xu hướng mới</span>
                    </div>
                    <div class="button">
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
            </div>
        </section>
    
        @yield('content')
    </main>
    <footer>   <section class="footer">
        <div class="main-footer">
            <div class="col-3">
                <h4>Danh mục:</h4>
                <a href="./product_detail.html">Patek Philippe</a>
                <a href="./product_detail.html">Blancpain</a>
                <a href="./product_detail.html">Rolex</a>
                <a href="./product_detail.html">Breguet</a>


            </div>
            <div class="col-3">
                <h4>Hỗ trợ:</h4>
                <a href="./product_detail.html">Theo dõi Đơn hàng</a>
                <a href="./product_detail.html">Đổi/Trả hàng</a>
                <a href="./product_detail.html">Giao hàng</a>
                <a href="./product_detail.html">Câu hỏi thường gặp</a>
            </div>
            <div class="col-3">
                <h4>Chi nhánh Hồ Chí Minh</h4>
                <p><span></span> Giờ mở cửa: 9h - 21h</p>
                <p>Địa chỉ: 164 Trần Hưng Đạo, Quận 1</p>
                <p>Hotline: 0707 516 159</p>
                <div class="social" style="display: flex;">
                    <a href="https://www.facebook.com/?locale=vi_VN" target="_blank">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <i class='bx bxl-instagram'></i>
                    </a>
                    <a href="https://twitter.com/home" target="_blank">
                        <i class='bx bxl-twitter'></i>
                    </a>
                </div>
            </div>
            
            <div class="col-3">
                <h4>Đăng ký nhận thông tin</h4>
                <input type="email" placeholder="Nhập địa chỉ email của bạn">
                <button>Đăng ký</button>
            </div>
            
        </div>
        <div class="container">
            <div class="payment">
                <img src="{{asset('images/logo/icon-pay-01.png.webp')}}" alt="">
                <img src="{{asset('images/logo/icon-pay-02.png.webp')}}" alt="">
                <img src="{{asset('images/logo/icon-pay-03.png.webp')}}" alt="">
                <img src="{{asset('images/logo/icon-pay-04.png.webp')}}" alt="">
                <img src="{{asset('images/logo/icon-pay-05.png.webp')}}" alt="">
            </div>
            <span>copyright &copy; all rights reserved | Nguyễn Phú Thịnh</span>
        </div>
    </section>
</footer>
    @yield('footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>