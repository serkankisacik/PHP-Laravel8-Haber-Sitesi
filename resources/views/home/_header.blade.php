
                    <div class="header-section">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left_section">
                                    <ul class="nav-cta hidden-xs">
                                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-search"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="head-search">
                                                        <form role="form">
                                                            <!-- Input Group -->
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                       placeholder="Birşeyler yaz"> <span class="input-group-btn">
                                                                            <button type="submit"
                                                                                    class="btn btn-primary">Arama
                                                                            </button>
                                                                        </span></div>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- Search Section -->
                                            <span class="date">
                                                <?php
                                                setlocale(LC_TIME,'turkish');
                                                echo iconv('latin5','utf-8',strftime('%A'));
                                                ?>
                                            </span>
                                    <!-- Date -->
                                    <span class="time">
                                        <?php
                                        setlocale(LC_TIME,'turkish');
                                        echo iconv('latin5','utf-8',strftime('%e %B %Y'));
                                        ?>
                                            </span>
                                    <!-- Time -->
                                    <div class="social">
                                        @if($setting->facebook !=null)
                                            <a class="icons-sm fb-ic" href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                        @endif
                                        <!--Twitter-->
                                            @if($setting->twitter !=null)
                                                <a class="icons-sm fb-ic" href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                                            @endif
                                        <!--Instagram +-->
                                            @if($setting->instagram !=null)
                                                <a class="icons-sm fb-ic" href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
                                            @endif
                                        <!--Youtube-->
                                            @if($setting->youtube !=null)
                                                <a class="icons-sm fb-ic" href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a>
                                            @endif

                                    </div>
                                    <!-- Top Social Section -->
                                </div>
                                <!-- Left Header Section -->
                            </div>
                            <div class="col-md-2">
                                <div class="logo">
                                    @if($setting->logo !=null)
                                        <a href="{{route('home')}}"><img src="{{ \Illuminate\Support\Facades\Storage::url($setting->logo) }}" height="100" alt="<{{$setting->title}}>"></a>
                                    @endif
                                </div>
                                <!-- Logo Section -->
                            </div>
                            <div class="col-md-5">
                                <div class="right_section">
                                    <ul class="nav navbar-nav">
                                        @if (Route::has('login'))
                                                @auth
                                                    @if(\Illuminate\Support\Facades\Auth::user()->profile_photo_path != null)
                                                    <img src="{{ \Illuminate\Support\Facades\Storage::url(\Illuminate\Support\Facades\Auth::user()->profile_photo_path) }}" height="30" alt="{{\Illuminate\Support\Facades\Auth::user()->name}}"></a>
                                                @endif
                                                    <li><a href="{{ url('admin') }}">Kontrol Paneli</a></li>
                                                @else
                                                    <li><a href="{{ route('login') }}">Oturum Aç</a></li>

                                                    @if (Route::has('register'))
                                                    <li><a href="{{ route('register') }}">Kayıt Ol</a></li>
                                                    @endif
                                                @endauth
                                        @endif

                                        <li class="dropdown lang">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                @if (Route::has('login'))
                                                    @auth
                                                           {{\Illuminate\Support\Facades\Auth::user()->name}}
                                                @endauth
                                                @endif
                                                <i class="fa fa-angle-down"></i></button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li><a href="{{route('myprofile')}}">Profil </a></li>
                                                <li><a href="#">Çıkış yap</a></li>
                                                <li><a href="#">Çıkış yap</a></li>
                                                <li><a href="{{route('admin_logout')}}">Çıkış yap</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- Language Section -->

                                    <!-- Search Section -->
                                </div>
                                <!-- Right Header Section -->
                            </div>
                        </div>
                    </div>
                    <!-- Header Section -->
