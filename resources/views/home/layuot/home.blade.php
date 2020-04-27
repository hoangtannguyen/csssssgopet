


<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.partials.head')
</head>
<body>
    @include('home.partials.div')
    @include('home.partials.nav')

    @include('home.partials.header')

    <div class="container pt-5 pb-5">
        @yield('content')
    </div>

    @include('home.partials.footer')

    @include('home.partials.js')



</body>
</html>

