@extends('home.layuot.slide')
@section('content')
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




    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
         <h1> <span class="subheading"><i class='	far fa-check-circle'></i> CHI TIẾT SẢN PHẨM </span>

        <p> </p>
      </div>
    </div>
    </div>
    	<div class="container">
    		<div class="row">
                    	<div class="col-lg-6 mb-5 ftco-animate">
                    <a href="#" class="image-popup"><img src="{{ $sanpham->cover_image }}" class="img-fluid" alt="Colorlib Template">
                        @if ($sanpham->promotion_price!=0)
                        <span class="status">Tiết Kiệm</span>
                        <div class="overlay"></div>
                        @endif


                    </a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3 >{{ $sanpham->name }}</h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
							</p>
						</div>
                        <div class="pricing">
                            <p class="price" style="font-size: 5px">
                                @if ($sanpham->promotion_price==0)
                                <span class="price-sale">{{ number_format($sanpham->price ) }}₫</span>
                                @else
                                <span class="mr-2 price-dc">{{ number_format($sanpham->price)  }}₫ -></span>
                                <span class="price-sale">{{ number_format($sanpham->promotion_price) }}₫</span>
                                @endif
                               </p>
                        </div>
    				<p> {{ $sanpham->description }}
						</p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="" id="" class="form-control">
	                  	<option value="">Small</option>
	                    <option value="">Medium</option>
	                    <option value="">Large</option>
	                    <option value="">Extra Large</option>
	                  </select>
	                </div>
		            </div>
                            </div>
                            <form action="{{ route('cart.add') }}" method="post" >
                                @csrf
                                <input type="hidden" name="productId" value="{{ $sanpham->id }}">
                                <span class="card-text text-muted inline-block">


                                    <div class="input-group col-md-6 d-flex mb-3">
                                        <span class="input-group-btn mr-2">
                                            <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                                           <i class="ion-ios-remove"></i>
                                            </button>
                                            </span>
                                    <input type="text" id="quantity" class="form-control input-number" min="1" max="200" name="quantity" value="1">
                                    <span class="input-group-btn ml-2">
                                        <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                         <i class="ion-ios-add"></i>
                                     </button>
                                     </span>
                                   </div>


                            </div>
                            <p><a href="cart.html" class="btn btn-black py-3 px-5"> <button type="submit" class="btn btn-black ">
                                <span class="glyphicon glyphicon-shopping-cart" style="font-size: 20px" >MUA HÀNG</span>
                              </button></a></p>

                         </div>



                    </form>
                     </div>
                </div>
    </section>

    <section class="ftco-section">
        <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
              <span class="subheading">NHỮNG SẢN PHẨM LIÊN QUAN</span>

            <p>Có {{ count($sp_tuongtu) }} liên quan</p>
          </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ( $sp_tuongtu as $tt)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{ route('ctsp' , $tt->id) }}" class="img-prod"><img class="img-fluid" src="{{$tt->cover_image }}" alt="Colorlib Template">
                            @if ($tt->promotion_price!=0)
                                 <span class="status">Tiết Kiệm</span>
                                 <div class="overlay"></div>
                             @endif
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">{{ $tt->name }}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price" style="font-size: 20px">
                                        @if ($tt->promotion_price==0)
                                        <span class="price-sale">{{ number_format($tt->price ) }}₫</span>
                                        @else
                                        <span class="mr-2 price-dc">{{ number_format($tt->price)  }}₫</span>
                                        <span class="price-sale">{{ number_format($tt->promotion_price) }}₫</span>
                                        @endif
                                       </p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <form action="{{ route('cart.add') }}" method="post" >
                                        @csrf
                                        <input type="hidden" name="productId" value="{{$tt->id }}">
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
            toastr.success("{{ session()->get('success') }}")
        @endif
    </script>
@endpush
