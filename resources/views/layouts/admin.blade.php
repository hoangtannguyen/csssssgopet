<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('layouts.partials.navbar')

 @include('layouts.partials.sidebar')

@yield('content')

</div>
<!-- ./wrapper -->

@include('layouts.partials.js')

</body>
</html>

{{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3" method="GET" action="{{ route('item.search')}}" >
        @csrf
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" value="Name" name="keyword" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
</nav> --}}


<!-- Content Wrapper. Contains page content -->
