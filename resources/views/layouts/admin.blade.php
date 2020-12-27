<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ULAG | @yield('title') </title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assetsdash')}}/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assetsdash')}}/css/font-awesome.css" rel="stylesheet"/>
    <!-- MORRIS CHART STYLES-->
    <link href="{{asset('assetsdash')}}/js/morris/morris-0.4.3.min.css" rel="stylesheet"/>
    <!-- CUSTOM STYLES-->
    <link href="{{asset('assetsdash')}}/css/custom.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    @yield('css')
    @yield('javascript')
</head>
<body>
    <div id="wrapper">
        @include('admin._navtop')
        @include('admin._navside')
        @include('admin._content')


    </div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{asset('assetsdash')}}/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{asset('assetsdash')}}/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{asset('assetsdash')}}/js/jquery.metisMenu.js"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="{{asset('assetsdash')}}/js/morris/raphael-2.1.0.min.js"></script>
<script src="{{asset('assetsdash')}}/js/morris/morris.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{asset('assetsdash')}}/js/custom.js"></script>
@yield('footer')
</body>
</html>
