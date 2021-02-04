
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
        <a href="{{route('admin_news_add')}}" class="btn btn-default square-btn-adjust">Haber Ekle</a>
        <div class="info" style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
            @auth
            {{\Illuminate\Support\Facades\Auth::user()->name}} | Son Erişim :&nbsp;{{\Illuminate\Support\Facades\Auth::user()->updated_at}}
            <a href="{{route('admin_logout')}}" class="btn btn-danger square-btn-adjust">Çıkış yap</a>
            @endauth
        </div>
    </nav>
    <!-- /. NAV TOP  -->
