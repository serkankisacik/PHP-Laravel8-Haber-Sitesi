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
@include('home._header')


<div class="navigation-section">
    <nav class="navbar m-menu navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                @include('home._menu')
            </div>
            <!-- .navbar-collapse -->
        </div>
        <!-- .container -->
    </nav>
    <!-- .nav -->
</div>
<!-- .navigation-section -->
</div>
<!-- .container -->
</section>
<!-- header_section_wrapper -->


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
