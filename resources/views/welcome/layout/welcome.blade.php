<!DOCTYPE html>
<html lang="en">
  <head>
    @include('welcome.partials.head')
  </head>
  <body class="goto-here">
		@include('welcome.partials.divphone')
        @include('welcome.partials.nav')
    <!-- END nav -->

        @include('welcome.partials.header')
{{--
        @include('welcome.partials.header1')

        @include('welcome.partials.header2') --}}

        {{-- @yield('content') --}}


        @include('welcome.index')

    @include('welcome.partials.footer')


  <!-- loader -->
  @include('welcome.partials.js')
  </body>
</html>
