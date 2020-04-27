@extends('home.layuot.home')


@section('content')
<!-- Blog Cards -->

<section class="ftco-section img"  style="background-image: url(images/anh.jpg); ">
    <div class="container">
            <div class="row justify-content-end">
      <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
          <span class="subheading"  style='font-size:30px;' style="color:white;">Giá tốt nhất cho bạn</span>
        <h2 class="mb-4 "  style="color:white;" >Giao dịch trong ngày</h2>
        <p style="color:white;">Rùa đớp, danh pháp khoa học là Chelydra serpentina, là một loài rùa trong họ Chelydridae</p>
        <h3><a href="#">Common Snapping</a></h3>
         <span  style="color:white;" class="price"  style='font-size:180px;' >350.000₫ <a style='font-size:60px;' href="#">now 400.000₫ only</a></span>
       <h1> <div id="timer" class="d-flex mt-5">
                      <div class="time " id="days" ></div>
                      <div class="time pl-3" id="hours"></div>
                      <div class="time pl-3" id="minutes"></div>
                      <div class="time pl-3" id="seconds"></div>
                    </div>
                </h1>


      </div>
    </div>
    </div>
</section>



<section class="ftco-section ">

    <div class="container">
        <div class="row no-gutters ftco-services">
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services mb-md-0 mb-4">
      <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-shipped"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">Ship dịch vụ COD</h3>
        <span>Trên phạm vi toàn quuốc chỉ với 20k - 34k</span>
      </div>
    </div>
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services mb-md-0 mb-4">
      <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-diet"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">Phụ kiện</h3>
        <span>Đa dạng & phù hợp - chất lượng </span>
      </div>
    </div>
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services mb-md-0 mb-4">
      <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-award"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">Thanh Toán </h3>
        <span>Khi nhận hàng & kiểm tra chất lượng</span>
      </div>
    </div>
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services mb-md-0 mb-4">
      <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-customer-service"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">Hotline : 093.195.1945</h3>
        <span>Tư vấn miễn phí 24/24</span>
      </div>
    </div>
    </div>
    </div>
    </div>
    <br><br><br><br>
<div class="container">
            <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">

        <h1 class="mb-5 subheading"><i class='far fa-gem'></i>  MẶT HÀNG MUA NHIỀU  </h1>

        <p>Có {{ count(   $sanpham_banchay) }} bò sát được chọn mua nhiều nhất</p>
      </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach (   $sanpham_banchay as $banchay)


            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="{{ route('ctsp' , $banchay->id) }}" class="img-prod"><img class="img-fluid" src="{{ $banchay->cover_image }}" alt="Colorlib Template" style="width:300px;height:300px">
                        @if ($banchay->promotion_price!=0)
                        <span class="status">Tiết Kiệm</span>
                        <div class="overlay"></div>
                        @endif
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{ $banchay->name }}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price" style="font-size: 20px">
                                    @if ($banchay->promotion_price==0)
                                    <span class="price-sale">{{ number_format($banchay->price ) }}₫</span>
                                    @else
                                    <span class="mr-2 price-dc">{{ number_format($banchay->price)  }}₫</span>
                                    <span class="price-sale">{{ number_format($banchay->promotion_price) }}₫</span>
                                    @endif
                                   </p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <form action="{{ route('cart.add') }}" method="post" >
                                    @csrf
                                    <input type="hidden" name="productId" value="{{ $banchay->id }}">
                                    <span class="card-text text-muted inline-block">
                                        <input type="number"  class="btn btn-outline-dark" min="1" max="200" name="quantity" value="1">
                                        <button type="submit" class="btn btn-primary ">
                                            <span class="glyphicon glyphicon-shopping-cart"><i class="ion-ios-cart"></i></span>
                                          </button></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>



    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
  <div class="col-md-12 heading-section text-center ftco-animate">

    <h1 class="mb-4 subheading"><i class='fas fa-check-double'></i> BÒ SÁT SIZE LỚN - ĐẶT HÀNG TRƯỚC </h1>
    <p>Có {{ count($noibats) }} bò sát nổi bật</p>
  </div>
</div>
</div>
<div class="container">
    <div class="row">
        @foreach ($noibats as $noibat)


        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="{{ route('ctsp' , $noibat->id) }}" class="img-prod"><img class="img-fluid" src="{{ $noibat->cover_image }}" alt="Colorlib Template" style="width:300px;height:300px">
                    @if ($noibat->promotion_price!=0)
                    <span class="status">Tiết Kiệm</span>
                    <div class="overlay"></div>
                    @endif
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">{{ $noibat->name }}</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price" style="font-size: 20px">
                                @if ($noibat->promotion_price==0)
                                <span class="price-sale">{{ number_format($noibat->price ) }}₫</span>
                                @else
                                <span class="mr-2 price-dc">{{ number_format($noibat->price)  }}₫</span>
                                <span class="price-sale">{{ number_format($noibat->promotion_price) }}₫</span>
                                @endif
                               </p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">

                            <form action="{{ route('cart.add') }}" method="post" >
                                @csrf
                                <input type="hidden" name="productId" value="{{ $noibat->id }}">
                                <span class="card-text text-muted inline-block">
                                    <input type="number"  class="btn btn-outline-dark" min="1" max="200" name="quantity" value="1">
                                    <button type="submit" class="btn btn-primary ">
                                        <span class="glyphicon glyphicon-shopping-cart"><i class="ion-ios-cart"></i></span>
                                      </button></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>









    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
  <div class="col-md-12 heading-section text-center ftco-animate">

    <h1 class="mb-4 subheading"><i class='fas fa-check'></i>  BÒ SÁT MỚI VỀ </h1>
    <p>Có {{ count($products) }} bò sát mới về</p>
  </div>
</div>
</div>
<div class="container">
    <div class="row">
        @foreach ($products as $product)


        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="{{ route('ctsp' , $product->id) }}" class="img-prod"><img class="img-fluid" src="{{ $product->cover_image }}" alt="Colorlib Template" style="width:300px;height:300px">
                    @if ($product->promotion_price!=0)
                    <span class="status">Tiết Kiệm</span>
                    <div class="overlay"></div>
                    @endif
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="#">{{ $product->name }}</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price" style="font-size: 20px">
                                @if ($product->promotion_price==0)
                                <span class="price-sale">{{ number_format($product->price ) }}₫</span>
                                @else
                                <span class="mr-2 price-dc">{{ number_format($product->price)  }}₫</span>
                                <span class="price-sale">{{ number_format($product->promotion_price) }}₫</span>
                                @endif
                               </p>
                        </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">

                            <form action="{{ route('cart.add') }}" method="post" >
                                @csrf
                                <input type="hidden" name="productId" value="{{ $product->id }}">
                                <span class="card-text text-muted inline-block">
                                    <input type="number"  class="btn btn-outline-dark" min="1" max="200" name="quantity" value="1">
                                    <button type="submit" class="btn btn-primary ">
                                        <span class="glyphicon glyphicon-shopping-cart"><i class="ion-ios-cart"></i></span>
                                      </button></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>




<div class="container">
    <div class="row justify-content-center mb-3 pb-3">
<div class="col-md-12 heading-section text-center ftco-animate">

<h1 class="mb-4 subheading"> <i class='	far fa-check-circle'></i> PHỤ KIỆN  </h1>
<p>Có {{ count(  $phukiens ) }} phụ kiện mới </p>
</div>
</div>
</div>
<div class="container">
<div class="row">
    @foreach (  $phukiens as $phukien)


    <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="product">
            <a href="{{ route('ctsp' , $phukien->id) }}" class="img-prod"><img class="img-fluid" src="{{ $phukien->cover_image }}" alt="Colorlib Template" style="width:300px;height:300px">
                @if ($phukien->promotion_price!=0)
                <span class="status">Tiết Kiệm</span>
                <div class="overlay"></div>
                @endif
            </a>
            <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">{{ $phukien->name }}</a></h3>
                <div class="d-flex">
                    <div class="pricing">
                        <p class="price" style="font-size: 20px">
                            @if ($phukien->promotion_price==0)
                            <span class="price-sale">{{ number_format($phukien->price ) }}₫</span>
                            @else
                            <span class="mr-2 price-dc">{{ number_format($phukien->price)  }}₫</span>
                            <span class="price-sale">{{ number_format($phukien->promotion_price) }}₫</span>
                            @endif
                           </p>
                    </div>
                </div>
                <div class="bottom-area d-flex px-3">
                    <div class="m-auto d-flex">

                        <form action="{{ route('cart.add') }}" method="post" >
                            @csrf
                            <input type="hidden" name="productId" value="{{$phukien->id }}">
                            <span class="card-text text-muted inline-block">
                                <input type="number"  class="btn btn-outline-dark" min="1" max="200" name="quantity" value="1">
                                <button type="submit" class="btn btn-primary ">
                                    <span class="glyphicon glyphicon-shopping-cart"><i class="ion-ios-cart"></i></span>
                                  </button></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

</div>















<div class="container">
    <div class="row justify-content-center mb-3 pb-3">
<div class="col-md-12 heading-section text-center ftco-animate">
  <span class="subheading"></span>
<h1 class="mb-4 subheading"><i class='fa fa-check-square'></i> SẢN PHẨM TIẾT KIỆM  </h1>
<p>Có {{ count($sanpham_khuyenmai ) }} sản phẩm tiết kiệm</p>
</div>
</div>
</div>
<div class="container">
<div class="row">
    @foreach ( $sanpham_khuyenmai  as $spkm)


    <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="product">
            <a href="{{ route('ctsp' , $spkm->id) }}" class="img-prod"><img class="img-fluid" src="{{ $spkm->cover_image }}" alt="Colorlib Template" style="width:300px;height:300px" >
                @if ($spkm->promotion_price!=0)
                <span class="status">Tiết Kiệm</span>
                <div class="overlay"></div>
                @endif
            </a>
            <div class="text py-3 pb-4 px-3 text-center" >
                <h3><a href="#">{{ $spkm->name }}</a></h3>
                <div class="d-flex">
                    <div class="pricing">
                        <p class="price" style="font-size: 20px">
                            @if ($spkm->promotion_price!=0)

                            <span class="mr-2 price-dc">{{ number_format($spkm->price)  }}₫</span>
                            <span class="price-sale">{{ number_format($spkm->promotion_price) }}₫</span>
                            @endif
                           </p>
                    </div>
                </div>
                <div class="bottom-area d-flex px-3">
                    <div class="m-auto d-flex">
                       <form action="{{ route('cart.add') }}" method="post" >
                            @csrf
                            <input type="hidden" name="productId" value="{{$spkm->id }}">
                            <span class="card-text text-muted inline-block">
                                <input type="number"  class="btn btn-outline-dark" min="1" max="200" name="quantity" value="1">
                                <button type="submit" class="btn btn-primary ">
                                    <span class="glyphicon glyphicon-shopping-cart"><i class="ion-ios-cart"></i></span>
                                  </button></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

</div>

</section>























<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">

        <h5 class="mb-4" >
            LIÊN HỆ NHÂN VIÊN TƯ VẤN CỦA CHÚNG TÔI ĐỂ ĐƯỢC HỖ TRỢ TẬN TÌNH</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text text-center">
                <p class="mb-5 pl-4 line">Nguyễn Quí Thành, Nhân viên Sales , Điện thoại: 0904.232.594.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<hr>

    <section class="ftco-section ftco-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
        </div>
    </div>
</section>

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
  <div class="container py-4">
    <div class="row d-flex justify-content-center py-5">
      <div class="col-md-6">
          <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          <span>Get e-mail updates about our latest shops and special offers</span>
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <form action="#" class="subscribe-form">
          <div class="form-group d-flex">
            <input type="text" class="form-control" placeholder="Enter email address">
            <input type="submit" value="Subscribe" class="submit px-3">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>














@endsection

@push('index-toastr')
    <script>
        @if (session('success'))
            toastr.warning("{{ session()->get('success') }}")
        @endif
    </script>
@endpush















