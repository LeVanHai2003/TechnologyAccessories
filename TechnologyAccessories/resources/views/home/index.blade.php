@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')

<link rel="stylesheet" href="../../css/Style.css">


<div className="slider-with-banner pt-4 pb-">
  <div className="container">
    <div class="row ">
      <div class="col-8 pb-3">
      <div className="slider-banner">
          
            
          <div className="main-bannert1">
          <NavLink to={'#'}> <img src="{{ asset('/images/slider/25.jpg') }}"  /></NavLink>
          </div>
          
         
        
      </div>
      </div>
      <div class="col-4 pb-3">
        <div class="row">
          <div class="col-12"><div className="li-banner ">
          <a href="/#">
            <img src="{{ asset('/images/slider/22.jpg') }}" style="width: 380px;height: 220px;" />
          </a>
        </div></div>
          <div class="col-12 pt-5"><div className="li-banner mt-3 ">
          <a href="/#">
            <img src="{{ asset('/images/slider/23.jpg') }}"  style="width: 380px;height: 220px;"/>
          </a>
        </div></div>
        </div>
      
    </div>
    
  
{{-- <div class="row mt-3">
   
    <div class="col-md-6 col-lg-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/img/banphim.png') }}" class="img-fluid rounded">
            <div class="card-body">
              <p class="card-text">Bàn Phím Cơ Máy Tính Crack K2 PRO Led RGB 10 Chế Độ</p>
            </div>
          </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/img/chuot.png') }}" class="img-fluid rounded">
            <div class="card-body">
              <p class="card-text">Combo Chuột Hamster 3D 1600 DPI 2.4GHz Không Dây Họa Tiết Hoạt Hình Dễ Thương Cho Laptop/Máy Tính</p>
            </div>
          </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/img/dongho.png') }}" class="img-fluid rounded">
            <div class="card-body">
              <p class="card-text">Đồng Hồ Thông Minh Vitog Y68 Chống Nước Hỗ Trợ Theo Dõi Sức Khỏe Kèm Phụ Kiện Chất Lượng Cao</p>
            </div>
          </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/img/dungcu.png') }}" class="img-fluid rounded">
            <div class="card-body">
              <p class="card-text">BlueWow 8-in-1 Bộ Bàn Chải Bàn Phím Máy Tính</p>
            </div>
          </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/img/kelaptop.png') }}" class="img-fluid rounded">
            <div class="card-body">
              <p class="card-text">Giá đỡ laptop dododios chất liệu hợp kim nhôm bền bỉ có thể gập lại tiện dụng - Model 2X</p>
            </div>
          </div>
    </div>
<div class="col-md-6 col-lg-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/img/loa.png') }}" class="img-fluid rounded">
            <div class="card-body">
              <p class="card-text">Loa Bluetooth Nghe Nhạc Mini Gutek WS887 Dáng Nhỏ Gọn Cầm Tay Hỗ Trợ Cắm Usb Thẻ Nhớ Giá Rẻ</p>
            </div>
          </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/img/loa1.png') }}" class="img-fluid rounded">
            <div class="card-body">
              <p class="card-text">Loa bluetooth có đèn LED theo nhạc C7 phiên bản cao cấp âm thanh vòm 6D sống động dung lượng pin lớn</p>
            </div>
          </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/img/quat.png') }}" class="img-fluid rounded">
            <div class="card-body">
              <p class="card-text">Quạt Tản Nhiệt - Fan Led RGB Cắm nguồn trực tiếp không qua HUB WM Star V8 S2 33 Bóng</p>
            </div>
          </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/img/tainghe1.png') }}" class="img-fluid rounded">
            <div class="card-body">
              <p class="card-text">Tai nghe mèo Chụp tai chơi game ONIKUMA K9 hồng có Mic,cho PC Laptop Máy tính,Tay Headphone Bluetooth Gaming Không dây</p>
            </div>
          </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/img/tainghe2.png') }}" class="img-fluid rounded">
            <div class="card-body">
              <p class="card-text">Tai Nghe Chụp Tai Bluetooth P47, Tai Không Dây Có Mic, Có Thẻ Nhớ, Âm Bass Cực Chất</p>
            </div>
          </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/img/banphim1.png') }}" class="img-fluid rounded">
            <div class="card-body">
              <p class="card-text">Bộ Bàn Phím Chuột có dây LED 7 Màu G21 Giá Rẻ (Màu Đen, Trắng)</p>
            </div>
          </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/img/kinhvr.png') }}" class="img-fluid rounded">
            <div class="card-body">
              <p class="card-text">Kính thực tế ảo cho điện thoại 3D VR SHINECON 6 cho điện thoại 3.5" - 6.0" G06 và G06E Android IOS</p>
            </div>
          </div>
    </div>
</div> --}}
<section class="product-area li-laptop-product pt-60 pb-45">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-12">
        <div class="li-section-title">
          <h2>
            
          </h2>
        </div>
        <div class="row row-cols-4 pb-5 pt-4">
        <div class="col-lg pt-5 ">
    
    <div class="product-image ">
      <Link ><img src="{{ asset('/img/banphim.png') }}"  alt="Cáp sạc" class="rounded mx-auto d-block img-fluid " /></Link>
      
      <div class="product_desc">

        <div class="product_desc_info">
          <div class="product-review">
            <h5 class="manufacturer">
              <a href="/#">Đánh giá</a>
            </h5>
            <div class="rating-box">
              <ul class="rating">
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
              </ul>
            </div>
          </div>
          <h4 class="product_name"></h4>
          <div >
            <span class="new-price"><span>Kính thực tế ảo cho điện thoại 3D VR SHINECON 6 cho điện thoại 3.5" - 6.0" G06 và G06E Android IOS</span></span>
            
          </div>
          
        </div>
        
        
      </div>
    </div>
    
    
      

  </div>
        <div class="col-lg pt-5 ">
    
    <div class="product-image ">
      <Link ><img src="{{ asset('/img/chuot.png') }}" alt="Cáp sạc" class="rounded mx-auto d-block img-fluid" /></Link>
      
      <div class="product_desc">

        <div class="product_desc_info">
          <div class="product-review">
            <h5 class="manufacturer">
              <a href="/#">Đánh giá</a>
            </h5>
            <div class="rating-box">
              <ul class="rating">
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
              </ul>
            </div>
          </div>
          <h4 class="product_name"></h4>
          <div >
            <span class="new-price"><span>Đồng Hồ Thông Minh Vitog Y68 Chống Nước Hỗ Trợ Theo Dõi Sức Khỏe Kèm Phụ Kiện Chất Lượng Cao</span></span>
            
          </div>
          
        </div>
        
        
      </div>
    </div>
    
    
      

  </div>
  
  <div class="col-lg pt-5 ">
    
    <div class="product-image ">
      <Link ><img src="{{ asset('/img/dongho.png') }}" alt="Cáp sạc" class="rounded mx-auto d-block img-fluid" /></Link>
      
      <div class="product_desc">

        <div class="product_desc_info">
<div class="product-review">
            <h5 class="manufacturer">
              <a href="/#">Đánh giá</a>
            </h5>
            <div class="rating-box">
              <ul class="rating">
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
              </ul>
            </div>
          </div>
          <h4 class="product_name"></h4>
          <div >
            <span class="new-price"><span>Đồng Hồ Thông Minh Vitog Y68 Chống Nước Hỗ Trợ Theo Dõi Sức Khỏe Kèm Phụ Kiện Chất Lượng Cao</span></span>
            
          </div>
          
        </div>
        
        
      </div>
    </div>
    
    
      

  </div>
        <div class="col-lg pt-5 ">
    
    <div class="product-image ">
      <Link ><img src="{{ asset('/img/dungcu.png') }}" alt="Cáp sạc" class="rounded mx-auto d-block img-fluid" /></Link>
      
      <div class="product_desc">

        <div class="product_desc_info">
          <div class="product-review">
            <h5 class="manufacturer">
              <a href="/#">Đánh giá</a>
            </h5>
            <div class="rating-box">
              <ul class="rating">
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
              </ul>
            </div>
          </div>
          <h4 class="product_name"></h4>
          <div >
            <span class="new-price"><span>BlueWow 8-in-1 Bộ Bàn Chải Bàn Phím Máy Tính</span></span>
            
          </div>
          
        </div>
        
        
      </div>
    </div>
    
    
      

  </div>

        </div>
      </div>
      <div class="col-lg-12">
        <div class="li-section-title">
          <h2>
            
          </h2>
        </div>
        <div class="row row-cols-lg-4 pb-5 pt-4">
        <div class="col-lg pt-5 ">
    
    <div class="product-image ">
      <Link ><img src="{{ asset('/img/kelaptop.png') }}" alt="Cáp sạc" class="rounded mx-auto d-block img-fluid " /></Link>
      
      <div class="product_desc">

        <div class="product_desc_info">
          <div class="product-review">
            <h5 class="manufacturer">
              <a href="/#">Đánh giá</a>
            </h5>
            <div class="rating-box">
              <ul class="rating">
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
<li class="no-star"><i class="ri-star-line"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
              </ul>
            </div>
          </div>
          <h4 class="product_name"></h4>
          <div >
            <span class="new-price"><span>Giá đỡ laptop dododios chất liệu hợp kim nhôm bền bỉ có thể gập lại tiện dụng - Model 2X</span></span>
            
          </div>
          
        </div>
        
        
      </div>
    </div>
    
    
      

  </div>
        <div class="col-lg pt-5 ">
    
    <div class="product-image ">
      <Link ><img src="{{ asset('/img/loa.png') }}"alt="Cáp sạc" class="rounded mx-auto d-block img-fluid" /></Link>
      
      <div class="product_desc">

        <div class="product_desc_info">
          <div class="product-review">
            <h5 class="manufacturer">
              <a href="/#">Đánh giá</a>
            </h5>
            <div class="rating-box">
              <ul class="rating">
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
              </ul>
            </div>
          </div>
          <h4 class="product_name"></h4>
          <div >
            <span class="new-price"><span>Loa Bluetooth Nghe Nhạc Mini Gutek WS887 Dáng Nhỏ Gọn Cầm Tay Hỗ Trợ Cắm Usb Thẻ Nhớ Giá Rẻ</span></span>
            
          </div>
          
        </div>
        
        
      </div>
    </div>
    
    
      

  </div>
  
  <div class="col-lg pt-5 ">
    
    <div class="product-image ">
      <Link ><img src="{{ asset('/img/loa1.png') }}" alt="Cáp sạc" class="rounded mx-auto d-block img-fluid" /></Link>
      
      <div class="product_desc">

        <div class="product_desc_info">
          <div class="product-review">
            <h5 class="manufacturer">
              <a href="/#">Đánh giá</a>
            </h5>
            <div class="rating-box">
              <ul class="rating">
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
              </ul>
            </div>
          </div>
          <h4 class="product_name"></h4>
          <div >
            <span class="new-price"><span>Loa bluetooth có đèn LED theo nhạc C7 phiên bản cao cấp âm thanh vòm 6D sống động dung lượng pin lớn</span></span>
            
          </div>
          
        </div>
        
        
      </div>
    </div>
    
    
      

  </div>
        <div class="col-lg pt-5 ">
<div class="product-image ">
      <Link ><img src="{{ asset('/img/quat.png') }}" alt="Cáp sạc" class="rounded mx-auto d-block img-fluid" /></Link>
      
      <div class="product_desc">

        <div class="product_desc_info">
          <div class="product-review">
            <h5 class="manufacturer">
              <a href="/#">Đánh giá</a>
            </h5>
            <div class="rating-box">
              <ul class="rating">
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
              </ul>
            </div>
          </div>
          <h4 class="product_name"></h4>
          <div >
            <span class="new-price"><span>Quạt Tản Nhiệt - Fan Led RGB Cắm nguồn trực tiếp không qua HUB WM Star V8 S2 33 Bóng</span></span>
            
          </div>
          
        </div>
        
        
      </div>
    </div>
    
    
      

  </div>

        </div>
      </div>
      <div class="col-lg-12">
        <div class="li-section-title">
          <h2>
            
          </h2>
        </div>
        <div class="row row-cols-lg-4 pb-5 pt-4">
        <div class="col-lg pt-5 ">
    
    <div class="product-image ">
      <Link ><img src="{{ asset('/img/tainghe1.png') }}" alt="Cáp sạc" class="rounded mx-auto d-block img-fluid " /></Link>
      
      <div class="product_desc">

        <div class="product_desc_info">
          <div class="product-review">
            <h5 class="manufacturer">
              <a href="/#">Đánh giá</a>
            </h5>
            <div class="rating-box">
              <ul class="rating">
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
              </ul>
            </div>
          </div>
          <h4 class="product_name"></h4>
          <div >
            <span class="new-price"><span>Tai nghe mèo Chụp tai chơi game ONIKUMA K9 hồng có Mic,cho PC Laptop Máy tính,Tay Headphone Bluetooth Gaming Không dây</span></span>
            
          </div>
          
        </div>
        
        
      </div>
    </div>
    
    
      

  </div>
        <div class="col-lg pt-5 ">
    
    <div class="product-image ">
      <Link ><img src="{{ asset('/img/tainghe2.png') }}"  alt="Cáp sạc" class="rounded mx-auto d-block img-fluid" /></Link>
      
      <div class="product_desc">

        <div class="product_desc_info">
          <div class="product-review">
            <h5 class="manufacturer">
              <a href="/#">Đánh giá</a>
            </h5>
<div class="rating-box">
              <ul class="rating">
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
              </ul>
            </div>
          </div>
          <h4 class="product_name"></h4>
          <div >
            <span class="new-price"><span>Tai Nghe Chụp Tai Bluetooth P47, Tai Không Dây Có Mic, Có Thẻ Nhớ, Âm Bass Cực Chất</span></span>
            
          </div>
          
        </div>
        
        
      </div>
    </div>
    
    
      

  </div>
  
  <div class="col-lg pt-5 ">
    
    <div class="product-image ">
      <Link ><img src="{{ asset('/img/banphim1.png') }}" alt="Cáp sạc" class="rounded mx-auto d-block img-fluid" /></Link>
      
      <div class="product_desc">

        <div class="product_desc_info">
          <div class="product-review">
            <h5 class="manufacturer">
              <a href="/#">Đánh giá</a>
            </h5>
            <div class="rating-box">
              <ul class="rating">
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
              </ul>
            </div>
          </div>
          <h4 class="product_name"></h4>
          <div >
            <span class="new-price"><span>Bộ Bàn Phím Chuột có dây LED 7 Màu G21 Giá Rẻ (Màu Đen, Trắng)</span></span>
            
          </div>
          
        </div>
        
        
      </div>
    </div>
    
    
      

  </div>
        <div class="col-lg pt-5 ">
    
    <div class="product-image ">
      <Link ><img src="{{ asset('/img/kinhvr.png') }}" alt="Cáp sạc" class="rounded mx-auto d-block img-fluid" /></Link>
      
      <div class="product_desc">

        <div class="product_desc_info">
          <div class="product-review">
            <h5 class="manufacturer">
              <a href="/#">Đánh giá</a>
            </h5>
            <div class="rating-box">
              <ul class="rating">
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li><i class="ri-star-fill"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
                <li class="no-star"><i class="ri-star-line"></i></li>
              </ul>
            </div>
          </div>
          <h4 class="product_name"></h4>
          <div >
<span class="new-price"><span>Kính thực tế ảo cho điện thoại 3D VR SHINECON 6 cho điện thoại 3.5" - 6.0" G06 và G06E Android IOS</span></span>
            
          </div>
          
        </div>
        
        
      </div>
    </div>
    
    
      

  </div>

        </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>
@endsection