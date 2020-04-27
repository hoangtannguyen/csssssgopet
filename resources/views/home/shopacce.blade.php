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
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="#" class="active">All</a></li>
                        <p>Có {{ count( $pk_theoloai) }} sản phẩm được tìm thấy</p>
    				</ul>
    			</div>
    		</div>
    		<div class="row">
                @foreach ( $pk_theoloai as $pk)
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="{{ route('ctsp' , $pk->id) }}" class="img-prod"><img class="img-fluid" src="{{ $pk->cover_image }}" alt="Colorlib Template" style="width:300px;height:300px" >
    						@if ($pk->promotion_price!=0)
                                 <span class="status">Tiết Kiệm</span>
                                 <div class="overlay"></div>
                             @endif
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{ $pk->name }}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
                                    <p class="price" style="font-size: 20px">
                                        @if ($pk->promotion_price==0)
                                        <span class="price-sale">{{ number_format($pk->price ) }}₫</span>
                                        @else
                                        <span class="mr-2 price-dc">{{ number_format($pk->price)  }}₫</span>
                                        <span class="price-sale">{{ number_format($pk->promotion_price) }}₫</span>
                                        @endif
                                       </p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
                                    <form action="{{ route('cart.add') }}" method="post" >
                                        @csrf
                                        <input type="hidden" name="productId" value="{{$pk->id }}">
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
            {!! $pk_theoloai->links() !!}
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
              <span class="subheading">NHỮNG SẢN PHẨM LIÊN QUAN</span>

            <p> Có {{ count($pk_lienquan) }} sản phẩm liên quan</p>
          </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ( $pk_lienquan as $pklq)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{ route('ctsp' , $pklq->id) }}" class="img-prod"><img class="img-fluid" src="{{$pklq->cover_image }}" alt="Colorlib Template" style="width:300px;height:300px" >
                            @if ($pklq->promotion_price!=0)
                                 <span class="status">Tiết Kiệm</span>
                                 <div class="overlay"></div>
                             @endif
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">{{ $pklq->name }}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price" style="font-size: 20px">
                                        @if ($pklq->promotion_price==0)
                                        <span class="price-sale">{{ number_format($pklq->price ) }}₫</span>
                                        @else
                                        <span class="mr-2 price-dc">{{ number_format($pklq->price)  }}₫</span>
                                        <span class="price-sale">{{ number_format($pklq->promotion_price) }}₫</span>
                                        @endif
                                       </p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <form action="{{ route('cart.add') }}" method="post" >
                                        @csrf
                                        <input type="hidden" name="productId" value="{{$pklq->id }}">
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





    @endsection
    @push('index-toastr')
    <script>
        @if (session('success'))
            toastr.success("{{ session()->get('success') }}")
        @endif
    </script>
@endpush
