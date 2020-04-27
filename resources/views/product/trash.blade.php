@extends('layouts.admin')
@section('content')


<div class="content-wrapper">


 <!-- Main content -->
    <section class="content">

          <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Thùng rác</h1>
            </div>

                <a href="{{ route('product.restoreAll') }}" class="btn btn-success"><i class="fas fa-trash-restore"></i> Khôi phục tất cả</a>
                <a href="{{ route('product.deleteAll') }}" style="float:right" class="btn btn-danger"> <button type="submit"
                    onclick="return confirm('Xóa xong sẽ không thể hồi phục. \n\nBạn chắc chắn muốn xóa tất cả?')"
                    class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Xóa tất cả</button></a>

            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="{{ route('product.create')}}" ><i class="material-icons" style="font-size:33px;color:blue">add_circle</i></a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Mô Tả</th>
                    <th>Giá bán</th>
                    <th>Giảm giá</th>
                    <th>Hình ảnh</th>
                    <th>Mua nhiều</th>
                    <th>Loại sản phẩm</th>
                    <th>Kiểu sản phẩm</th>
                   <th>Kiểu phụ kiện</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                    @if (count($products) == 0)
                    <td colspan="6"> Không có dữ liệu </td>
                    @else
                    @foreach ($products as $key =>  $product)

                    <tr>
                        <td>{{ ++$key}}</td>
                    <td>{{ $product->name}}</td>
                    <td>{{ $product->description}}</td>
                    <td>{{ $product->price}}</td>
                    <td>{{ $product->promotion_price}}</td>
                    <td><img style="width:110px;height:110px" src="{{ $product->cover_image }}"></td>
                    <td><span class="text-ellipsis">
                        <?php
                         if($product->selling==1){
                          ?>
                          <a href="{{ route('unactive' , $product->category_id) }}"><i class='fas fa-crown' style='font-size:20px;color:yellow'></i></a>
                          <?php
                           }else{
                          ?>
                           <a    href="{{ route('active', $product->category_id) }}"><i class='fas fa-crown' style='font-size:20px;color:black'></i></a>
                          <?php
                         }
                        ?>
                      </span></td>
                    <td>{{ $product->category_id}}</td>
                    <td>{{ $product->id_type}}</td>
                    <td>{{ $product->id_acce}}</td>
                     <td>  <a href="{{ route('product.show' , $product )}}"   class="btn btn-info"> <i class="material-icons" style="font-size:22px;color:blue">blur_linear</i></a>

                        <a href="{{ route('product.edit' , $product )}}" class="btn btn-success" ><i class="material-icons" style="font-size:22px;color:green">border_color</i></a>

                        <form action="{{ route('product.destroy' , $product->id )}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  onclick="return confirm('Bạn chắc chắn muốn xóa?')" class="btn btn-danger" ><i class="material-icons" style="font-size:22px;color:red">delete</i></button>
                    </form>
        </td>
    </tr>
        @endforeach
        @endif
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->





 @endsection

