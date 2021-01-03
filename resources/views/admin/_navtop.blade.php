
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Gezinmeyi değiştir</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('admin_home')}}">Ulag Yönetim</a>
        </div>
        <div class="info" style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
            @auth
            {{\Illuminate\Support\Facades\Auth::user()->name}} | Son Erişim : 30 May 2014 &nbsp;
            <a href="{{route('admin_logout')}}" class="btn btn-danger square-btn-adjust">Çıkış yap</a>
            @endauth
        </div>
    </nav>
    <!-- /. NAV TOP  -->
