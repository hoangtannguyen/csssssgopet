<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href= "{{ asset('images/icons/favicon.ico/') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= "{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= "{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= "{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= "{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= "{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}" >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= "{{ asset('vendor/select2/select2.min.css') }}" >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= "{{ asset('vendor/daterangepicker/daterangepicker.css') }}" >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset('css/util.css')  }}">
	<link rel="stylesheet" type="text/css" href= "{{ asset('css/main.css') }}" >
<!--===============================================================================================-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Home') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

