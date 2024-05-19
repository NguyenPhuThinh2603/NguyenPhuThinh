@extends('layouts.site')
@section('title','bai viet')
@section('content')
<div>   
    <section class="blog">
        <div class="main-blog">
          <div class="blog-side-one">
            <div class="blog_col">
              <div class="image">
                <img src="{{asset('images/post/blog1.jpeg')}}" alt="" />
              </div>
              <h2>Patek Philippe: Đỉnh cao của Haute Horlogerie</h2>
              <p>
                Patek Philippe đồng nghĩa với chế tác đồng hồ cao cấp. Được thành
                lập vào năm 1839, thương hiệu Thụy Sĩ này nổi tiếng với tay nghề
                tinh xảo, các biến chứng phức tạp và vẻ đẹp vượt thời gian.
              </p>
              <div class="container">
                <span>Bởi Quản trị viên | Thương hiệu Đồng hồ | 8 Bình luận</span>
                <a
                  href="https://www.elle.vn/the-gioi-thoi-trang/dong-ho-haute-horlogerie"
                  class="continue-reading"
                  >Tiếp tục đọc<i class="bx bx-right-arrow-alt"></i
                ></a>
              </div>
            </div>
            <div class="blog_col">
              <div class="image">
                <img src="{{asset('images/post/blog3.jpeg')}}" alt="" />
              </div>
              <h3>Rolex: Biểu tượng của Thành Công</h3>
              <p>
                Với hơn một thế kỷ kinh nghiệm và tinh thần tiên phong, Rolex đã
                trở thành biểu tượng của thành công và đẳng cấp. Đồng hồ Rolex
                không chỉ là một công cụ đo thời gian mà còn là biểu tượng của
                phong cách và đẳng cấp.
              </p>
              <div class="container">
                <span>Bởi Quản trị viên | Thương hiệu Đồng hồ | 8 Bình luận</span>
  
                <a
                  href="https://www.dafc.com.vn/vi/discover-the-best-of-rolex/a-voyage-into-the-world-of-rolex-vi/"
                  class="continue-reading"
                  >Tiếp tục đọc<i class="bx bx-right-arrow-alt"></i
                ></a>
              </div>
            </div>
            <div class="blog_col">
              <div class="image">
                <img src="{{asset('images/post/blog4.jpeg')}}" alt="" />
              </div>
              <h3>Breguet: Sự Kết Hợp Hoàn Hảo giữa Truyền Thống và Hiện Đại</h3>
              <p>
                Breguet, với hơn 200 năm lịch sử, là một trong những thương hiệu
                đồng hồ cổ nhất và cũng là một trong những nhà sản xuất đồng hồ tự
                chế hàng đầu thế giới.
              </p>
              <div class="container">
                <span>Bởi Quản trị viên | Thương hiệu Đồng hồ | 8 Bình luận</span>
                <a
                  href=" https://xwatch.vn/kien-thuc-ve-thuong-hieu/dong-ho-breguet-n959177.html"
                  class="continue-reading"
                  >Tiếp tục đọc<i class="bx bx-right-arrow-alt"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="blog-side-two">
            <div class="inputBx">
              <input type="text" placeholder="search" />
              <i class="bx bx-search-alt-2"></i>
            </div>
            <div class="categories">
              <h4>Danh mục Đồng hồ</h4>
              <a href="#">Thương hiệu nổi tiếng</a>
              <a href="#">Loại đồng hồ</a>
              <a href="#">Chất liệu</a>
              <a href="#">Màu sắc</a>
              <a href="#">Tính năng đặc biệt</a>
            </div>
            <div class="products">
              <h4></h4>
              <div class="product-col">
                <img
                  width="90px"
                  height="100px"
                  src="{{asset('images/post/blog5.jpeg')}}"
                  alt=""
                />
                <div class="cntent">
                  <p>Rolex Day Date</p>
                  <span>2.700.000.000đ</span>
                </div>
              </div>
              <div class="product-col">
                <img
                  width="90px"
                  height="100px"
                  src="{{asset('images/post/blog6.jpeg')}}"
                  alt=""
                />
                <div class="cntent">
                  <p>Unique Minute</p>
                  <span>20.000.000.000đ</span>
                </div>
              </div>
              <div class="product-col">
                <img
                  width="90px"
                  height="100px"
                  src="{{asset('images/post/blog7.jpeg')}}"
                  alt=""
                />
                <div class="cntent">
                  <p>Ogival</p>
                  <span>22.889.000đ</span>
                </div>
              </div>
            </div>
            <div class="archive">
              <div class="archive-col">
                <span> july 2018</span>
                <span>(9)</span>
              </div>
              <div class="archive-col">
                <span> june 2018</span>
                <span>(20)</span>
              </div>
              <div class="archive-col">
                <span> may 2018</span>
                <span>(16)</span>
              </div>
              <div class="archive-col">
                <span> april 2018</span>
                <span>(35)</span>
              </div>
              <div class="archive-col">
                <span> march 2018</span>
                <span>(25)</span>
              </div>
              <div class="archive-col">
                <span> february 2018</span>
                <span>(12)</span>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>


@endsection

