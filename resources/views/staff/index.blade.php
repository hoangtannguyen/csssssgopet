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

                <a href="{{ route('staff.create')}}" ><i class="material-icons" style="font-size:33px;color:blue">add_circle</i></a>
                <table  id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Salary</th>
                            <th>Image</th>
                            <th>Show</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($staffs) == 0)
                    <td>Không có dữ liệu</td>
                        @endif
                        @foreach ($staffs as $key => $staff)
                            <tr>
                            <td>{{++ $key}}</td>
                            <td>{{$staff->name}}</td>
                            <td>{{$staff->age }}</td>
                            <td>{{$staff->phone}}</td>
                            <td>{{$staff->email}}</td>
                            <td>{{$staff->salary}}</td>
                            <td> <img style="width:300px;height:300px"src="{{ $staff->image }}"></td>

                            <td>  <a href="{{ route('staff.show' , $staff->id )}}"   class="btn btn-info"> <i class="material-icons" style="font-size:22px;color:blue">blur_linear</i></a> </td>
                            <td>  <a href="{{ route('staff.edit' , $staff->id )}}" class="btn btn-success" ><i class="material-icons" style="font-size:22px;color:green">border_color</i></a> </td>
                            <td>
                            <form action="{{ route('staff.destroy' , $staff->id )}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  onclick="return confirm('Bạn chắc chắn muốn xóa?')" class="btn btn-danger" ><i class="material-icons" style="font-size:22px;color:red">delete</i></button>
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

                @endsection
