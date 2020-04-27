<!--------------------------------------
NAVBAR
--------------------------------------->



@include('home.partials.css')

@include('home.partials.navcss')


<header class="header-section">
<div class="header-top"  >
    <div class="container">
        <div class="row">
            <div class="col-lg text-center text-lg-left" style="right:30px;" >
                <!-- logo -->
                <a href="{{ route('home') }}" class="site-logo">
                    <img src="images/logo1.jpg" alt=""   >
               {{-- <i style="font-size:30px;color:black">G</i><i  class="fa fa-reddit" style="font-size:30px;color:black" >PET</i> --}}
                </a>
            </div>

            <div class="col-xl-6 col-lg-12 "  style="top:35px; height:50px; right:10px;">
                <form class="header-search-form" action="{{ route('search') }}" method="get"  >
                    <input type="text" name="key"  placeholder="Tìm một thứ gì đó ....">
                    <button style="font-size:17px"  type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="col-xl-4 col-lg-5"  style="top:32px; height:50px; left:50px;">
                <div class="user-panel">
                    <div class="up-item">
                        <i class="flaticon-profile"></i>
                        <a href="#"><i class='far fa-user'></i> Đăng nhập</a> / <a href="#">Đăng Ký</a>
                    </div>
                    <div class="up-item">
                        <div class="shopping-card">

                        </div>
                        <a  href="{{ route('cart.checkout') }}" class='btn btn-warning'class="nav-link"><span class="icon-shopping_cart"></span>[{{Cart::getContent()->count()}}] / {{number_format(Cart::getSubTotal())}}₫</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</header>


    <nav class="navbar navbar-expand-sm navbar-primary ftco_navbar  bg-primary ftco-navbar-light" id="ftco-navbar" >

        {{-- <img class="img-fluid" src="/images/logo-con-than-lan-27.png" alt="Colorlib Template"> --}}
        <div class="container" >


          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"> Menu</span>
          </button>


          <div  class="collapse navbar-collapse" id="ftco-nav" >


            <ul class="navbar-nav ml-auto ">
              <li   class="nav-item btn-warning "><a style="color:white;"   href="{{ route('home') }}" class="nav-link "  ><i class="fa fa-home" style="font-size:17px" ></i> Trang Chủ</a></li>
              <li class="nav-item dropdown " >

              <a  style="color:white;"  class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i> Bò Sát </a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                @foreach ( $loai_sp as $loai)

                <a class="dropdown-item" href="{{ route('loaisp', $loai->id) }}">{{ $loai->name }}</a>


                  @endforeach
              </div>

            </li>
            <li class="nav-item dropdown" >
                <a  style="color:white;" class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i> Phụ kiện</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    @foreach ( $loai_pk as $lpk)


                    <a class="dropdown-item" href="{{ route('loaipk', $lpk->id) }}">{{ $lpk->name }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item dropdown" >
                <a  style="color:white;" class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i> Bò sát gặm nhắm</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    @foreach ( $loai_pk as $lpk)


                    <a class="dropdown-item" href="{{ route('loaipk', $lpk->id) }}">{{ $lpk->name }}</a>
                    @endforeach
                </div>
            </li>
            <li    class="nav-item "><a style="color:white;"  href="{{ route('skill') }}" class="nav-link">Kỹ Thuật Nuôi</a></li>
            <li    class="nav-item "><a style="color:white;"  href="{{ route('cart') }}" class="nav-link">Giỏ Hàng</a></li>
            <li    class="nav-item "><a style="color:white;"  href="{{ route('cart.checkout') }}" class="nav-link">Thanh Toán</a></li>
            <li    class="nav-item "><a style="color:white;"  href="{{ route('contact') }}" class="nav-link">Liên Hệ</a></li>

        </ul>


          </div>


        </div>


          {{-- <form action="{{ route('search') }}" method="get" >
            @csrf

              <div class="container h-100">
                <div class="d-flex justify-content-center h-100">
                  <div class="searchbar">
                    <input class="search_input" type="text" name="key" placeholder="Search...">
                    <a href="#" class="search_icon"> <i class="fas fa-search"></i> </a>
                  </div>
                </div>
              </div>


            </form> --}}




      </nav>

