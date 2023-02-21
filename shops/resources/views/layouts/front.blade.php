{{--use Illuminate\Support\Facades\Session;--}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
      @yield('title')
    </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    {{--styles--}}
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    {{--<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" >--}}

    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet" >
             {{--owl corousel--}}
    <link href="{{asset('frontend/css/owl.theme.default.min.css')}}" rel="stylesheet" >
    <link href="{{asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet" >

    {{--Google Fonts--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    {{--font awesom--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
</head>
<body >
  @include('layouts.inc.frontnavbar')
  <div class="content">
    @yield('content')
</div>
<script src="{{asset('frontend/js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>
<script src="{{asset('frontend/js/checkout.js')}}"></script>

@if(Session('success'))
<script>
swal("{{Session('success')}}")
</script>
@endif()
@yield('scripts')
</body>
</html>
