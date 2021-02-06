<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Serkan Kısacık">
    <title>@yield('title') | @yield('pagetitle')</title>

    <!-- favicon -->
    <link href="{{asset('assets')}}/img/favicon.png" rel=icon>

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- font-awesome -->
    <link href="{{asset('assets')}}/fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="{{asset('assets')}}/css/mobile-menu.css" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="{{asset('assets')}}/css/owl.carousel.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Theme Style -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
    @yield('headerjs')
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
    <!-- Page Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- preloader -->

    <div class="uc-mobile-menu-pusher">
        <div class="content-wrapper">
            <section id="header_section_wrapper" class="header_section_wrapper">
                <div class="container">
                    @include('home._header')
                    @include('home._menu')
                </div>
            </section>
        </div>
    </div>




@section('content')
@show

@include('home._footer')
@include('home._mobilemenu')


@yield('footerjs')
<!-- jquery Core-->
<script src="{{asset('assets')}}/js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>

<!-- Theme Menu -->
<script src="{{asset('assets')}}/js/mobile-menu.js"></script>

<!-- Owl carousel -->
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>

<!-- Theme Script -->
<script src="{{asset('assets')}}/js/script.js"></script>
</body>
</html>
