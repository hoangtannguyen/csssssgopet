@extends('home.layuot.slide')
@section('content')
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
        <span>Đa dạng & phù hợp - chất lượng</span>
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

        <h1 class="mb-4 subheading">Tìm kiếm</h1>
        <p>Có {{ count($product) }} sản phẩm được tìm thấy</p>
      </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($product as $pro)


            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="{{ route('ctsp' , $pro->id) }}" class="img-prod"><img class="img-fluid" src="{{ $pro->cover_image }}" alt="Colorlib Template">
                        @if ($pro->promotion_price!=0)
                        <span class="status">Tiết Kiệm</span>
                        <div class="overlay"></div>
                        @endif
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{ $pro->name }}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price" style="font-size: 20px">
                                    @if ($pro->promotion_price==0)
                                    <span class="price-sale">{{ number_format($pro->price ) }} VNĐ</span>
                                    @else
                                    <span class="mr-2 price-dc">{{ number_format($pro->price)  }} VNĐ</span>
                                    <span class="price-sale">{{ number_format($pro->promotion_price) }} VNĐ</span>
                                    @endif
                                   </p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="{{ route('ctsp' , $pro->id) }}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>



</section>

@endsection
