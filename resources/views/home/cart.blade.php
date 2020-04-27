@extends('home.layuot.slide')

@section('content')
<div class="row top-15">
    <div class="col-md-4 order-md-2 mb-4" >
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-danger">Đơn hàng của bạn</span>
        <span class="btn btn-primary">{{Cart::getContent()->count()}}</span>
      </h4>
      <span class="text-danger">Giỏ hàng</span>
        <ul class="list-group mb-3">
            @foreach(Cart::getContent() as $product)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                    <h6 class="my-0" style="font-size:14px" >{{$product->name}}</h6>
                    <small class="text-dark">{{$product->quantity . ' x ' . number_format($product->price)}}₫</small>
                </div>
                <span class="text-body">{{number_format($product->price * $product->quantity)}}₫</span>
            </li>
            @endforeach
            <li class="list-group-item d-flex justify-content-between">
                <span class="text-body"><h6>Tổng :</h6></span>
                <strong class="text-body">{{number_format(Cart::getSubTotal())}}₫</strong>
            </li>

        </ul>
        <form action="{{route('cart.clear')}}" method="POST" class="card p-2">
            @csrf
            <div class="input-group">
                <div class="input-group">
                    <button type="submit" class="btn btn-danger">Xóa mặt hàng</button>
                </div>
            </div>
        </form>
        <form class="card p-2">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Địa chỉ thanh toán</h4>
        <form action="{{ route('cart.store') }}"    method="post" enctype="multipart/form-data"     class="needs-validation" novalidate >
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">Tên</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                 </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Họ</label>
                    <input type="text" class="form-control" id="firstname" name='firstname' placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

            </div>

            <div class="mb-3">
                <label for="email">Email <span class="text-muted">(Tùy chọn)</span></label>
                <input type="email" class="form-control" id="email" name='email' >
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
                @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address"  name='address' required>
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <div class="mb-3">
                <label for="address">Số điện thoại</label>
                <input type="number" class="form-control" id="phone" name="phone" required>
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>
        <hr class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="note" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">Địa chỉ giao hàng giống như địa chỉ thanh toán của tôi</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox"  class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info">Lưu thông tin này cho lần sau</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Thanh toán</h4>

            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"  required>
                    <label class="custom-control-label" for="credit">Chuyển khoản</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="debit">Bằng tiền mặt</label>
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Chuyển qua thanh toán</button>
        </form>
    </div>
</div>
@endsection



@push('index-toastr')
    <script>
        @if (session('success'))
            toastr.success("{{ session()->get('success') }}")
        @endif
    </script>
@endpush
