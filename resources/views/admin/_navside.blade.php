
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{ \Illuminate\Support\Facades\Storage::url(\Illuminate\Support\Facades\Auth::user()->profile_photo_path) }}" class="user-image img-responsive"/>
                {{\Illuminate\Support\Facades\Auth::user()->name}}
            </li>


            <li>
                <a class="active-menu"  href="{{route('admin_home')}}"><i class="fa fa-dashboard fa-3x"></i> Gösterge Paneli</a>
            </li>
            <li>
                <a  href="{{route('admin_category')}}"><i class="fa fa-folder-open fa-3x"></i> Kategoriler</a>
            </li>
            <li>
                <a  href="{{route('admin_news')}}"><i class="fa fa-paperclip fa-3x"></i> Haberler</a>
            </li>
            <li>
                <a  href="{{route('admin_setting')}}"><i class="fa fa-cog fa-3x"></i> Ayarlar</a>
            </li>
            <li>
                <a  href="{{route('admin_message')}}"><i class="fa fa-edit fa-3x"></i> İletişim Formları </a>
            </li>
            <li>
                <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
            </li>
            <li>
                <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
            </li>
            <li  >
                <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
            </li>
            <li  >
                <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
            </li>
            <li>
                <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
            </li>


            <li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>

                        </ul>

                    </li>
                </ul>
            </li>
            <li  >
                <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
            </li>
        </ul>

    </div>

</nav>
