@extends('home.layuot.slide')
@section('content')


<div class="col-md-12 heading-section text-center ftco-animate">

   <a href="" style='font-size:25px;'>SHOPPING CART > </a><a href="{{ route('cart.checkout') }}" style='font-size:25px;' >CHECKOUT DETAILS > </a><a href="" style='font-size:25px;' >ORDER COMPLETE</a>

  </div>

  <section class="ftco-section ftco-cart">
          <div class="container" >
              <div class="row" >
              <div class="col-md-12 ftco-animate">
                  <div class="cart-list" id="cart12" >
                      <table class="table" id="cart13" >
                          <thead class="thead-primary">
                            <tr class="text-center">
                                <th></th>
                              <th>HÌNH ẢNH</th>
                              <th>TÊN</th>

                              <th>GIÁ</th>
                              <th>SỐ LƯỢNG</th>
                              <th>TỔNG</th>
                            </tr>
                          </thead>
                          <tbody>

                            @foreach(Cart::getContent() as $item  => $product)
                            <tr>
                         <td class="product-remove">
                               <form action="{{ route('remove', $product->id) }}"  method="post" >
                                @csrf
                                <div class="input-group">
                                    <div class="input-group">
                                        <button style="font-size:20px" type="submit" class="btn btn-block" > <span class="ion-ios-close"></span></button>
                                    </div>
                                </div>
                            </form>
                         </td>
                            <td class="image-prod"><img class="img-fluid" src="{{ $product->attributes->img }}" alt="Colorlib Template" style="width:100px;height:100px"></td>
                                <td class="product-name">
                                  <h3>{{$product->name}}</h3>
                                 </td>
                                 <td class="price">{{$product->price}}</td>
                                <td>
                                <input
                                data-url="{{ route('cart.update',$product->id) }}"
                                data-id="{{ $product->id }}"
                                data-token="{{ csrf_token() }}" type="number"
                                value="{{  Cart::get($product->id)->quantity }}"
                                onchange="updateCart(this)"
                                class="btn btn-outline-dark" min="1" max="200" id="quantity{{ $item }}">
                            </td >
                              <td class="total" id="total{{ $item }}">{{number_format($product->price * Cart::get($product->id)->quantity)}}₫</td>

                            </tr><!-- END TR-->
                            @endforeach
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
                                <script>
                                    function updateCart(btn){
                                        let id = $(btn).data('id');
                                        $.ajax({
                                            url: $(btn).data('url'),
                                            method: 'post',
                                            data: {
                                                '_token': $(btn).data('token'),
                                                'id': $(btn).data('id'),
                                                'quantity': $(btn).val()
                                            },
                                            success: function(){
                                                // $(`#quantity${id}`).load(` #quantity${id}`);
                                                // $(`#total${id}`).load(` #total${id}`);
                                                // $('#cart12').load(' #cart13');
                                                location.reload();

                                            },
                                            error: function(){
                                                alert('error');
                                            }
                                        });


                                     }

                                </script>
                          </tbody>
                        </table>
                    </div>
              </div>
          </div>
          <div class="row justify-content-end">
              <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                  <div class="cart-total mb-3">
                      <h3>Ước tính vận chuyển và thuế</h3>
                      <p>Shop sẽ liên hệ xác nhận đơn hàng và báo giá ship: 0₫</p>
                        <form action="#" class="info">

                <div class="form-group">
                    <label for="country">Thành Phố / Tỉnh</label>
                  <input type="text" class="form-control text-left px-3" placeholder="">
                </div>
                <div class="form-group">
                    <label for="country">Mã bưu chính / mã bưu điện</label>
                  <input type="text" class="form-control text-left px-3" placeholder="">
                </div>
              </form>
                  </div>
              </div>
              <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                  <div class="cart-total mb-3">
                      <h3>TỔNG GIỎ HÀNG</h3>
                      <p class="d-flex">
                          <span>Tổng phụ</span>
                          <span>{{number_format(Cart::getSubTotal())}}₫</span>
                      </p>

                      <hr>
                      <p class="d-flex total-price">
                          <span>Tổng cộng</span>
                          <span>{{number_format(Cart::getSubTotal())}}₫</span>
                      </p>
                  </div>
                  <p><a href="{{ route('cart.checkout') }}" class="btn btn-primary py-3 px-4">Chuyển qua thanh toán</a></p>
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
          toastr.success("{{ session()->get('success') }}")
      @endif
  </script>
@endpush
