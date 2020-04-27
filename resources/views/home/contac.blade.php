@extends('home.layuot.slide')
@section('content')

<section class="ftco-section contact-section bg-light">

    <div class="container">

        <div class="row d-flex mb-5 contact-info">
            @foreach ($contact as $contac)


        <div class="w-100"></div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Address:</span> {{ $contac->address }}</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Phone:</span> <a href="tel://1234567920">+ {{ $contac->phone }}</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Kết nối:</span> <a href="mailto:info@yoursite.com">{{ $contac->emmail }}</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Website</span> <a href="#">{{ $contac->web }}</a></p>
            </div>
        </div>
        @endforeach
      </div>
      <div class="row block-9">
        <div class="col-md-6 order-md-last d-flex">
          <form action="#" class="bg-white p-5 contact-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nhập tên của bạn">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nhập Email của bạn">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Tiêu đề">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Tin nhắn kèm"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Gửi tin" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

        <div class="col-md-6 d-flex">
            <div id="map" class="bg-white"></div>
        </div>
      </div>
    </div>
  </section>
@endsection
