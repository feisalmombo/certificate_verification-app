<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OCVS-@yield('title') </title>
@include('partials.includes')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="cbp-spmenu-push" >
         <div class="main-content">
        <!--left-fixed -navigation-->
        <!--left-fixed -navigation-->
        <!-- header-starts -->
        @include('partials.header')
        <!-- //header-ends -->
        @include('partials.sidebar')

        <!-- main content start-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  @include('msgs.success')
            
                  @yield('content')
                 </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <!--//footer-->
        </div>
        @include('partials.footer')

</body>
</html>
