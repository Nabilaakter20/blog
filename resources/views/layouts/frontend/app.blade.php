<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title> 

    <!-- Scripts -->
    

   	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


    <!-- Stylesheets -->

    <link href="{{ asset('assets/frontend/css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/swiper.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/ionicons.css')}}" rel="stylesheet">
    
    <link href="{{ asset('assets/frontend/css/home/styles.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/home/ressponsive.css')}}" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <!--Toaster-->
     <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @stack('css')     
    
</head>
<body>
@include('layouts.frontend.partial.header')

@yield('content')

@include('layouts.frontend.partial.footer')


	<!-- SCIPTS -->

	<script src="{{ asset('assets/frontend/js/jquery-3.1.1.min.js')}}"></script>

	<script src="{{ asset('assets/frontend/js/tether.min.js')}}"></script>

	<script src="{{ asset('assets/frontend/js/bootstrap.js')}}"></script>
	
	<script src="{{ asset('assets/frontend/js/swiper.js')}}"></script>

	<script src="{{ asset('assets/frontend/js/scripts.js')}}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

    <!--Toaster-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    
    {!! Toastr::message() !!}
    <script>
       @if($errors->any())
          @foreach($errors->all() as $error)
              toastr.error('{{ $error }}','Error',{
                  closeButton:true,
                  progressBar:true,
               });
          @endforeach
       @endif
   </script>
	@stack('js')
</body>
</html>
