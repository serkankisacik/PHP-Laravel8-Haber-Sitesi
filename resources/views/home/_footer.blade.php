@php($setting=\App\Http\Controllers\HomeController::getsetting())
@php($parentCategories= \App\Http\Controllers\HomeController::categorylist())
<section id="subscribe_section" class="subscribe_section">
    <div class="row">
        <form action="#" method="post" class="form-horizontal">
            <div class="form-group form-group-lg">
                <label class="col-sm-6 control-label" for="formGroupInputLarge">
                    <h1> EN SON HABERLER İÇİN <span class="red-color">Kaydol</span></h1>
                </label>

                <div class="col-sm-3">
                    <input type="text" id="subscribe" name="subscribe" class="form-control input-lg">
                </div>
                <div class="col-sm-1">
                    <input type="submit" value="Kaydol" class="btn btn-large pink">
                </div>
                <div class="col-sm-2"></div>
            </div>
        </form>
    </div>
</section>
<!-- Subscriber Section -->

<section id="footer_section" class="footer_section">
    <div class="container">
        <hr class="footer-top">
        <div class="row">
            <div class="col-md-3">
                <div class="footer_widget_title"><h3><a href="category.html" target="_self">{{$setting->title}}</a></h3></div>
                <div class="logo footer-logo">
                    @if($setting->logo !=null)
                        <a href="{{route('home')}}"><img src="{{ \Illuminate\Support\Facades\Storage::url($setting->logo) }}" height="100" alt="<{{$setting->title}}>"></a>
                    @endif
                </div>
                {{ substr($setting->aboutus, 500,150 ) }}
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self">Bağlantılar</a></h3>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <ul class="list-unstyled left">
                            @foreach($parentCategories as $rs)
                                <li class="dropdown m-menu-fw"><a href="{{$rs->slug}}" data-toggle="dropdown" class="dropdown-toggle">{{$rs->title}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-xs-8">
                        <ul class="list-unstyled">
                            <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
                            <li><a href="{{route('contact')}}">İletişim</a></li>
                            <li><a href="{{route('faq_old')}}">SSS Eski Versiyon</a></li>
                            <li><a href="{{route('faq')}}">SSS</a></li>
                            <li><a href="{{route('tag')}}">Künye</a></li>
                            <li><a href="{{route('references')}}">Referanslar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="#" target="_self">Son yorumlar</a></h3>
                </div>
                @foreach($reviewlist as $rs)
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{\Illuminate\Support\Facades\Storage::url($rs->news->image)}}" height="100px"  alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="single.html">{{ substr($rs->review, 0,45 ) }}</a>
                        </h3>
                        <span><a href="#"> {{$rs->user->name}} </a> Tarafından</span><br>
                        <span class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </span>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self">Son Fotoğraflar</a></h3>
                </div>
                <div class="widget_photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo1.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo2.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo3.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo4.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo5.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo6.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo7.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo8.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo9.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo10.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo11.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo12.jpg" alt="Tech Photos">
                </div>

            </div>
        </div>
    </div>

    <div class="footer_bottom_Section">
        <div class="container">
            <div class="row">
                <div class="footer">
                    <div class="col-sm-3">
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
                    </div>
                    <div class="col-sm-6">
                        <p>&copy; Copyright 2021-Ulag News {{$setting->company}} . Design by: <a href="https://serkankisacik.com/">Serkan</a> </p>
                    </div>
                    <div class="col-sm-3">
                        <p>En Güncel Haberler</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!-- #content-wrapper -->

</div>
<!-- .offcanvas-pusher -->

<a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>



