{{--use Illuminate\Support\Facades\Session;--}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    {{--styles--}}
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    {{--<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" >--}}
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" >

</head>
<body >
  @include('layouts.inc.navbar')
  <div id="layoutSidenav">
    @include('layouts.inc.sidebar')
    <div id="layoutSidenav_content">
                <main>
                @yield('content')
               </main>
               @include('layouts.inc.adminfooter')
         </div>
</div>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
<script>
  @if(Session('success'))
swal("{{Session('success')}}")
  @endif()
</script>

</body>
</html>
