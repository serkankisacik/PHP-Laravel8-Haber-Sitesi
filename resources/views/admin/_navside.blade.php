
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{ \Illuminate\Support\Facades\Storage::url(\Illuminate\Support\Facades\Auth::user()->profile_photo_path) }}" class="user-image img-responsive"/>
                {{\Illuminate\Support\Facades\Auth::user()->name}}
            </li>
            <li>
                <a   href="{{route('admin_home')}}"><i class="fa fa-dashboard fa-3x"></i> Gösterge Paneli</a>
            </li>
            <li>
                <a  href="{{route('admin_category')}}"><i class="fa fa-folder-open fa-3x"></i> Kategoriler</a>
            </li>
            <li>
                <a  href="{{route('admin_news')}}"><i class="fa fa-paperclip fa-3x"></i><span class="fa arrow"></span> Haber</a>
                <ul class="nav nav-second-level">
                    <li><a  href="{{route('admin_news')}}"><i class="fa fa-paperclip"></i><span class="fa arrow"></span> Haberler</a></li>
                    <li>
                        <a href="{{route('admin_news_add')}}"><i class="fa fa-save"></i>Haber Ekle</a>
                    </li>
                </ul>
            </li>
            <li>
                <a  href="{{route('admin_setting')}}"><i class="fa fa-cog fa-3x"></i> Ayarlar</a>
            </li>
            <li>
                <a  href="{{route('admin_message')}}"><i class="fa fa-edit fa-3x"></i> İletişim Formları </a>
            </li>
            <li>
                <a  href="{{route('admin_review')}}"><i class="fa fa-comment fa-3x"></i> Yorumlar </a>
            </li>
            <li>
                <a  href="{{route('admin_faq')}}"><i class="fa fa-question fa-3x"></i> SSS </a>
            </li>
            <li>
                <a  href="{{route('admin_users')}}"><i class="fa fa-users fa-3x"></i> Kullanıcı İşlemleri </a>
            </li>
            <li>
                <a class="active-menu"  href="{{route('home')}}"><i class="fa fa-pagelines fa-3x"></i> Siteye Git</a>
            </li>
        </ul>

    </div>

</nav>
