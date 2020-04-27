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
              <h1>Pets Tables</h1>
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
                <a href="{{ route('item.create')}}" ><i class="material-icons" style="font-size:33px;color:blue">add_circle</i></a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                     <th>ID</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Gender</th>
                    <th>Amount</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @if (count($items) == 0)
                    <td colspan="6"> Không có dữ liệu </td>
                    @else
                    @foreach ($items as $key =>  $item)

                    <tr>
                     <th>{{ ++$key }}</th>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->size}}</td>
                    <td>{{ $item->gender}}</td>
                    <td>{{ $item->amount}}</td>
                    <td>{{ $item->price}}</td>
                    <td> <img style="width:300px;height:300px"src="{{ $item->image }}"></td>
                    <td>  <a href="{{ route('item.show' , $item->id )}}"   class="btn btn-info"> <i class="material-icons" style="font-size:22px;color:blue">blur_linear</i></a> </td>
                    <td>  <a href="{{ route('item.edit' , $item->id )}}" class="btn btn-success" ><i class="material-icons" style="font-size:22px;color:green">border_color</i></a> </td>
                    <td>
                    <form action="{{ route('item.destroy' , $item->id )}}" method="post" enctype="multipart/form-data">
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



