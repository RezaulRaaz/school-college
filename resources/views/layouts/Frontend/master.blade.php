<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{asset('Frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('Frontend/css/fontawesome-all.min.css')}}">
<link rel="stylesheet" href="{{asset('Frontend/css/style.css')}}">
    @stack('css')
</head>
<body>
    <!-- header area start -->
    @include('layouts.Frontend.parts.common.header')
    <!-- header area end -->
    @yield('content')
   <div class="clearfix"></div>
   <!-- footer -->
   @include('layouts.Frontend.parts.common.footer')


<script src="{{asset('Frontend/js/jquery3.5.1.js')}}"></script>
<script src="{{asset('Frontend/js/popper.min.js')}}"></script>
<script src="{{asset('Frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Frontend/js/main.js')}}"></script>
    @stack('js')
</body>
</html>
