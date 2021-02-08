<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ULAG | Admin Giriş Sayfası </title>
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
</head>
<body>
<div id="wrapper">

    <div id="page-inner">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h2>Giriş Sayfası</h2>
                <img src="{{asset('assets')}}/img/logo.png">
                <h5>Hoşgeldin, işlem yapmak için lütfen giriş yapınız. </h5>

            </div>
            <div class="col-md-4"></div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <form action="{{route('admin_logincheck')}}" method="post">
                    @csrf
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input name="email" id="email" type="text" class="form-control" placeholder="E-posta">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Şifre">
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox"/> Beni Hatırla?
                        </label>
                        <label class="checkbox-inline">

                        </label>
                        <div align="right">
                            <button type="reset" class="btn btn-primary">Sıfırla</button>
                            <button type="submit" class="btn btn-default">Oturum Aç</button>
                        </div>
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </form>
                <p align="center">Yada</p>
                <button class="btn btn-primary"><i class="fa fa-facebook "></i> Facebook İle Giriş</button>
                <button class="btn btn-danger"><i class="fa fa-google-plus "></i> Gmail İle Giriş</button>
                <br><br><br>
                <a href="#">Şifremi unuttum</a>
            </div>
            <div class="col-md-4"></div>
        </div>
        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->

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
