@extends('layouts.site')
@section('title','lien he')
@section('content')
<div>
    <div class="contact">
        <div class="side_one">
            <h2>Hãy Liên Hệ Với Chúng Tôi</h2>
            <div class="inputBx">
                <i class='bx bx-envelope'></i>
                <input type="email" placeholder="Nhập địa chỉ email của bạn">
            </div>
            <div class="inputBx">
                <textarea cols="30" rows="10" placeholder="Chúng tôi có thể giúp gì cho bạn?"></textarea>
            </div>
        
            <button>Gửi</button>
        </div>
        
        <div class="side_two">
            <div class="col-1">
                <i class='bx bx-location-plus' ></i>
                <div class="container">
                    <h4>Địa chỉ:</h4>
                    <p>164 Trần Hưng Đạo, Quận 1, Thành phố Hồ Chí Minh</p>
                </div>
            </div>
            <div class="col-1">
                <i class='bx bx-phone'></i>
                <div class="container">
                    <h4>Hotline: </h4>
                    <span>0707 516 159</span>
                </div>
            </div>
            <div class="col-1">
                <i class='bx bx-envelope'></i>
                <div class="container">
                    <h4>Hỗ trợ bán hàng</h4>
                    <span>thinh26@gmail.com</span>
                </div>
            </div>
        </div>
    </div>

    <div class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0725901183945!2d106.69558271431594!3d10.771747092332648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b7d738f593b%3A0x2d5b19de25d0f087!2zMTY0IFRyw6FuIFThu6ssIFRoaeG7gW4gQ-G7lSBwaOG6oWkgMTAyLCBRdeG6rW4gMSwgUXXhuq1uIDIsIFZpZXRuYW0!5e0!3m2!1sen!2suk!4v1691755334200!5m2!1sen!2suk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>
    
@endsection
