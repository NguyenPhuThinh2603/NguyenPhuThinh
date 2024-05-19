@extends('layouts.site')
@section('title','phu kien')
@section('content')
<div>    
    <section class="overview">
        <h2>Collection Overview</h2>
        <div class="category">
            <div class="col-1">
                <button class="tablinks active" id="all">PHỤ KIỆN </button>
                <button class="tablinks" id="patek philippe">DÂY ĐỒNG HỒ</button>
                <button class="tablinks" id="blancpain">HỘP XOAY ĐỒNG HỒ</button>
                <button class="tablinks" id="rolex">BAO DA VERTU</button>
                <button class="tablinks" id="breguet">BAO DA XOR</button>
        
            </div>
            <div class="col-1">
                <button class="btn"><i class='bx bx-menu-alt-left' ></i>filter</button>
                <button class="btn"><i class='bx bx-search-alt-2'></i>search</button>
            </div>
        </div>
  
        <div class="tabContent" id="all">
            <div class="main-tabs">
                <div class="col-2">
                    <div class="image">
                        <img src="{{asset('images/accessory/pk1.jpeg')}}" alt="">
                    </div>
                    <div class="content">
                        <h5>Paul Design winder 6 có khóa vân tay</h5>
                        <span>38.000.000 VND</span>
                       
                    </div>
                     <div class="view">
                        <a href="./product_detail.html">quick view</a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="image">
                        <img src="{{asset('images/accessory/pk12.jpeg')}}" alt="">
                    </div>
                    <div class="content">
                        <h5>Két đồng hồ Paul Design Illusion 16L</h5>
                        <span>1 tỷ 265 VND</span>
                    </div>
                     <div class="view">
                        <a href="./product_detail.html">quick view</a>
                    </div>
                </div>
                <div class="col-2">
                  <div class="image">
                      <img src="{{asset('images/accessory/pk3.jpeg')}}" alt="">
                  </div>
                  <div class="content">
                      <h5>Hộp quay đồng hồ cơ Paul Design Gentlemen 2 + 3 Watch Winder</h5>
                      <span>18.500.000 VND</span>
                  </div>
                  <div class="view">
                      <a href="./product_detail.html">quick view</a>
                  </div>
              </div>
              
                <div class="col-2">
                    <div class="image">
                        <img src="{{asset('images/accessory/pk2.jpeg')}}" alt="">
                    </div>
                    <div class="content">
                        <h5>Hộp xoay Paul Design Petite 1 Premium Watch winder </h5>
                        <span>7.500.000 VND</span>
                    </div>
                     <div class="view">
                        <a href="./product_detail.html">quick view</a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="image">
                        <img src="{{asset('images/accessory/pk5.jpeg')}}" alt="">
                    </div>
                    <div class="content">
                        <h5>Dây Đồng hồ Patek Philippe</h5>
                        <span>Liên hệ </span>
                    </div>
                     <div class="view">
                        <a href="./product_detail.html">quick view</a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="image">
                        <img src="{{asset('images/accessory/pk6.jpeg')}}" alt="">
                    </div>
                    <div class="content">
                        <h5>Dây cao su Rubber B dành cho đồng hồ Patek Philippe</h5>
                        <span>Liên hệ</span>
                    </div>
                     <div class="view">
                        <a href="./product_detail.html">quick view</a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="image">
                        <img src="{{asset('images/accessory/pk7.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h5>Dây Hublot Bigbang</h5>
                        <span>Liên hệ</span>
                    </div>
                     <div class="view">
                        <a href="./product_detail.html">quick view</a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="image">
                        <img src="{{asset('images/accessory/pk8.jpeg')}}" alt="">
                    </div>
                    <div class="content">
                        <h5>Dây Rubber PatekPhilippe Aquanaut  Silicone</h5>
                        <span>Liên hệ</span>
                    </div>
                     <div class="view">
                        <a href="./product_detail.html">quick view</a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="image">
                        <img src="{{asset('images/accessory/bd1.jpeg')}}" alt="">
                    </div>
                    <div class="content">
                        <h5>Bao da Vertu Signature S có nắp khóa vàng ta</h5>
                        <span>4.200.000 VND</span>
                    </div>
                     <div class="view">
                        <a href="./product_detail.html">quick view</a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="image">
                        <img src="{{asset('images/accessory/bbd3.jpeg')}}" alt="">
                    </div>
                    <div class="content">
                        <h5>Bao da Vertu Signature S da bê xanh khóa trắng</h5>
                        <span>3.900.000 VND</span>
                    </div>
                     <div class="view">
                        <a href="./product_detail.html">quick view</a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="image">
                        <img src="{{asset('images/accessory/bd4.jpeg')}}" alt="">
                    </div>
                    <div class="content">
                        <h5>Bao da Vertu Signature S màu đỏ không lắp Logo vàng</h5>
                        <span>4.500.000 VND</span>
                    </div>
                     <div class="view">
                        <a href="./product_detail.html">quick view</a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="image">
                        <img src="{{asset('images/accessory/bd5.jpeg')}}" alt="">
                    </div>
                    <div class="content">
                        <h5>Bao da Vertu Signature S trắng không nắp</h5>
                        <span>4.500.00 VND</span>
                    </div>
                     <div class="view">
                        <a href="./product_detail.html">quick view</a>
                    </div>
                </div>
            </div>
        </div>
      
    <div class="tabContent" id="patek philippe">
        <div class="main-tabs">
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk5.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Dây Đồng hồ Patek Philippe</h5>
                    <span>Liên hệ </span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk9.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Dây hublot cao su tổng hợp</h5>
                    <span>Liên hệ</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk6.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Dây cao su Rubber B dành cho đồng hồ Patek Philippe</h5>
                    <span>Liên hệ</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk7.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Dây Hublot Bigbang</h5>
                    <span>Liên hệ</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk8.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Dây Rubber PatekPhilippe Aquanaut  Silicone</h5>
                    <span>Liên hệ</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
           
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk11.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Dây Hublot da bê</h5>
                    <span>Liên hệ</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
           
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk10.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Dây hublot cao su</h5>
                    <span>Liên hệ</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
           
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk13.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Dây đeo Đồng Hồ Franck Muller Vanguard V41</h5>
                    <span>Liên hệ</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
           
        </div>
    </div>


     <div class="tabContent" id="blancpain">
        <div class="main-tabs">
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk1.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Paul Design winder 6 có khóa vân tay</h5>
                    <span>38.00.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk2.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Hộp quay đồng hồ cơ Paul Design Gentlemen 2 + 3 Watch Winder</h5>
                    <span>17.500.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk3.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Hộp xoay Paul Design Petite 1 Premium Watch winder </h5>
                    <span>7.500.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk12.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Két đồng hồ Paul Design Illusion 16L</h5>
                    <span>227.500.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk14.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Paul Design illusion S8</h5>
                    <span>298.500.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk15.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Paul Design illusion 8M </h5>
                    <span>118.000.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk16.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Két sắt an toàn chứa 6 ổ quay Paul Design illusion 6S </h5>
                    <span>127.500.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/pk17.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Paul Design Classic 3 Premium Watch winder </h5>
                    <span>237.500.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
        </div>
    </div>


    <div class="tabContent" id="rolex">
        <div class="main-tabs">
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/bd1.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao da Vertu Signature S có nắp khóa vàng ta</h5>
                    <span>4.200.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/bd2.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao da Vertu Signature S da bê xanh khóa trắng</h5>
                    <span>3.200.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/bd9.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao da Vertu Signature S da bê viền trắng</h5>
                    <span>3.900.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/bd4.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao da Vertu Signature S màu đỏ không lắp Logo vàng</h5>
                    <span>3.200.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/bd5.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao da Vertu Signature S trắng không nắp</h5>
                    <span>4.500.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/bd6.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao da Vertu Signature S ca sấu đen không nắp</h5>
                    <span>4.200.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/bd7.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao Vertu da đà điểu màu nâu có lắp</h5>
                    <span>4.600.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/bd8.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao da Vertu đà điểu màu nâu rút</h5>
                    <span>4.700.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
        </div>
    </div>


    <div class="tabContent" id="breguet">
        <div class="main-tabs">
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/xo1.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao Da Điện Thoại XOR da cá sấu</h5>
                    <span>3.700.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/xo2.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao Da Điện Thoại XOR da bê trơn</h5>
                    <span>2.700.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/xo3.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao Da Điện Thoại XOR da bê sần</h5>
                    <span>2.900.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/xo4.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao Da XOR màu nâu</h5>
                    <span>3.700.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/xo5.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao Da Điện Thoại XOR Chính hãng</h5>
                    <span>Liên hệ </span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/xo6.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao da XOR Marine chính hãng</h5>
                    <span>Liên hệ</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/xo7.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao da XOR Rose chính hãng</h5>
                    <span>Liên hệ</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/accessory/xo8.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Bao da XOR da cá sấu vân to</h5>
                    <span>Liên hệ</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
       
        </div>
    </div>


    <div class="load">
        <button>load more</button>
    </div>
</section>
</div>

@endsection