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
              <h1>
               Loại sản phẩm</h1>
            </div>
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
                <a href="{{ route('acce.create')}}" ><i class="material-icons" style="font-size:29px;color:blue">add_circle</i></a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @if (count($categorys) == 0)
                    <td>Không có dữ liệu</td>
               @endif
               @foreach ($categorys as $key => $category)
                <tr>
                        <td>{{ ++$key}}</td>
                        <td>{{ $category->name}}</td>

                         <td>  <a href="{{ route('product.show' , $category->id )}}"   class="btn btn-primary"><i class="material-icons" style="font-size:22px;color:white">blur_linear</i></a></td>

                           <td> <a href="{{ route('product.edit' , $category->id )}}" class="btn btn-success" ><i class="material-icons" style="font-size:22px;color:white">border_color</i></a></td>

                      <td> <form action="{{ route('product.destroy' , $category->id )}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  onclick="return confirm('Bạn chắc chắn muốn xóa?')" class="btn btn-danger" ><i class="material-icons" style="font-size:22px;color:white">delete</i></button>
                    </form>
            </td>
            </tr>

               @endforeach
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
