
@extends('layouts.site')
@section('title','trang chu')
@section('content')
<div>
<section class="overview">
    <h2>Collection Overview</h2>
    <div class="category">
        <div class="col-1">
            <button class="tablinks active" id="all">Thương hiệu</button>
            <button class="tablinks" id="patek philippe">Patek Philippe</button>
            <button class="tablinks" id="blancpain">Blancpain</button>
            <button class="tablinks" id="rolex">Rolex</button>
            <button class="tablinks" id="breguet">Breguet</button>
            <button class="tablinks" id="ogival">Ogival</button>
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
                    <img src="{{asset('images/products/all products/pat3.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Patek Philippe Complications</h5>
                    <span>1 tỷ 200 VND</span>
                   
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/all products/pat4.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Patek Philippe Calendar</h5>
                    <span>1 tỷ 265 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
              <div class="image">
                  <img src="{{asset('images/products/all products/pat6.png')}}" alt="">
              </div>
              <div class="content">
                  <h5>Patek Philippe Nautilus</h5>
                  <span>1 tỷ 700 VND</span>
             
                  
              </div>
              <div class="view">
                  <a href="./product_detail.html">quick view</a>
              </div>
          </div>
          
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/all products/pat1.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Patek Philippe Moonphase</h5>
                    <span>1 tỷ 100 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/all products/bre1.webp')}}" alt="">
                </div>
                <div class="content">
                    <h5>Breguet Tradition</h5>
                    <span>599.600.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/all products/bre2.webp')}}" alt="">
                </div>
                <div class="content">
                    <h5>Breguet Classique</h5>
                    <span>626.599.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/all products/bre3.webp')}}" alt="">
                </div>
                <div class="content">
                    <h5>Breguet Quantieme</h5>
                    <span>2 tỷ 540 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/all products/bre4.webp')}}" alt="">
                </div>
                <div class="content">
                    <h5>Breguet Perpetuel</h5>
                    <span>1 tỷ 980 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/all products/blan1.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Metiers Grande Decoration</h5>
                    <span>1 tỷ 539 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/all products/blan2.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Metiers d'Art Damasquinee</h5>
                    <span>1 tỷ 925 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/all products/blan3.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Metiers d'Art Shakudo</h5>
                    <span>2 tỷ 888 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/all products/blan4.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Metiers d'Art 8 Jours Manuelle</h5>
                    <span>2 tỷ 885 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/all products/rolex11.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Rolex Datejust </h5>
                    <span>295.000.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/all products/rolex10.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Rolex Day Date</h5>
                    <span>1 tỷ 200 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/all products/rolex7.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Rolex Oyster Day-Date</h5>
                    <span>1 tỷ 225 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/all products/rolex8.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Rolex Cosmograph Daytona</h5>
                    <span>1 tỷ 350 VND</span>
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
                    <img src="{{asset('images/products/patekphilippe/pat5.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Patek Philippe Moonphase</h5>
                    <span>1 tỷ 100 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/patekphilippe/pat1.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Patek Philippe 5905R-010</h5>
                    <span>1 tỷ 995 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/patekphilippe/pat3.png')}}" alt="">
                </div>
                <div class="content">
                    <h5> Patek Philippe  4947R-001</h5>
                    <span>1 tỷ 010 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/patekphilippe/pat4.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Patek Philippe 5960-01G</h5>
                    <span>1 tỷ 136 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/patekphilippe/pat6.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Patek Philippe 5905/1A Green</h5>
                    <span>1 tỷ 695 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/patekphilippe/pat7.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Patek Philippe 5146G-001</h5>
                    <span>805.000.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/patekphilippe/pat8.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Patek Philippe Green Olive</h5>
                    <span>960.000.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/patekphilippe/pat9.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Patek Philippe Rose Gold</h5>
                    <span>980.000.000 VND</span>
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
                    <img src="{{asset('images/products/blancpain/blan2.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>BLANCPAIN Metiers </h5>
                    <span>8 tỷ 672 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/blancpain/blan3.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>BLANCPAIN Navitimer A01</h5> 
                    <span>2 tỷ 389 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/blancpain/blan4.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>BLANCPAIN Navitimer B01 </h5>
                    <span>3 tỷ 490 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/blancpain/blan5.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>BLANCPAIN Navitimer C01 </h5>
                    <span>300.000.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/blancpain/blan6.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>BLANCPAIN Automatic GMT45 </h5>
                    <span>91.200.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/blancpain/blan8.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5> BLANCPAIN Calendar </h5>
                    <span>322.000.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/blancpain/blan9.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>BLANCPAIN Automatic 41</h5>
                    <span>86.400.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/blancpain/blan10.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>BLANCPAIN Automatic 42 </h5>
                    <span>141.500.000 VND</span>
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
                    <img src="{{asset('images/products/rolex /rolex1.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Rolex Day Date</h5>
                    <span>1 tỷ 250 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/rolex /rolex2.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Rolex Oyster Day-Datet</h5>
                    <span>1 tỷ 200 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/rolex /rolex3.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Rolex Day Date New</h5>
                    <span>1 tỷ 200 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/rolex /rolex4.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Rolex Oyster Perpetual</h5>
                    <span> 1 tỷ 120 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/rolex /rolex5.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Rolex President Automatic</h5>
                    <span>1 tỷ 2 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/rolex /rolex6.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Rolex Yellow Gold Black </h5>
                    <span>1 tỷ 2 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/rolex /rolex9.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>Rolex Cellini Moonphase </h5>
                    <span>600.790.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/rolex /rolex14.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5> Rolex Cellini Date</h5>
                    <span>11 Tỷ 700 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/rolex /rolex11.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Rolex Cosmograph Daytona</h5>
                    <span>1 tỷ 350 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/rolex /rolex12.png')}}" alt="">
                </div>
                <div class="content">
                    <h5>Rolex Cellini 50709RBR</h5>
                    <span>470.000.000 VND</span>
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
                <div class="image shoes-img">
                    <img src="{{asset('images/products/breguet/bre1.webp')}}" alt="">
                </div>
                <div class="content">
                    <h5>BREGUET Tradition</h5>
                    <span>599.990.000  VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image shoes-img">
                    <img src="{{asset('images/products/breguet/bre2.webp')}}" alt="">
                </div>
                <div class="content">
                    <h5>BREGUET Classique</h5>
                    <span>626.390.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image shoes-img">
                    <img src="{{asset('images/products/breguet/bre3.webp')}}" alt="">
                </div>
                <div class="content">
                    <h5>BREGUET Classique Quantieme</h5>
                    <span>Giá: Liên hệ</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image shoes-img">
                    <img src="{{asset('images/products/breguet/bre4.webp')}}" alt="">
                </div>
                <div class="content">
                    <h5>BREGUET Classique Perpetuel</h5>
                    <span>Giá: Liên hệ</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image shoes-img">
                    <img src="{{asset('images/products/breguet/bre5.webp')}}" alt="">
                </div>
                <div class="content">
                    <h5>BREGUET Classique de Lune</h5>
                    <span>Giá: Liên hệ</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image shoes-img">
                    <img src="{{asset('images/products/breguet/bre6.webp')}}" alt="">
                </div>
                <div class="content">
                    <h5>BREGUET Reine de Naples</h5>
                    <span>1 tỷ 4 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image shoes-img">
                    <img src="{{asset('images/products/breguet/bre7.webp')}}" alt="">
                </div>
                <div class="content">
                    <h5>BREGUET Classique 9075 Year</h5>
                    <span>Giá: Liên hệ</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image shoes-img">
                    <img src="{{asset('images/products/breguet/bre8.webp')}}" alt="">
                </div>
                <div class="content">
                    <h5>BREGUET Tradition 7038bb</h5>
                    <span>879.390.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
        </div>
    </div>

 
    <div class="tabContent" id="ogival">
        <div class="main-tabs">
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/OGIVAL/ov1.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>OGIVAL OG1929-24AGSR-T</h5>
                    <span>13.800.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/OGIVAL/ov2.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>OGIVAL OG358.88AGSR</h5>
                    <span>37.200.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/OGIVAL/ov3.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>OGIVAL OG380-388DLW-T</h5>
                    <span>15.345.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/OGIVAL/ov4.jpg')}}" alt="">
                </div>
                <div class="content">
                    <h5>OGIVAL OG358.88AGR-GL</h5>
                    <span>38.567.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/OGIVAL/ov5.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>OGIVAL OG377DMW-COC</h5>
                    <span>13.789.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/OGIVAL/ov6.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>OGIVAL OG3001DMW-GL-T</h5>
                    <span>6.368.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/OGIVAL/ov7.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>OGIVAL OG358.652AGR-GL</h5>
                    <span>30.700.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/OGIVAL/ov8.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>OGIVAL OG358.61AMR-GL</h5>
                    <span>16.420.000 VND</span>
                </div>
                 <div class="view">
                    <a href="./product_detail.html">quick view</a>
                </div>
            </div>
            <div class="col-2">
                <div class="image">
                    <img src="{{asset('images/products/OGIVAL/ov9.jpeg')}}" alt="">
                </div>
                <div class="content">
                    <h5>OGIVAL OG386GW-T</h5>
                    <span>9.810.000 VND</span>
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