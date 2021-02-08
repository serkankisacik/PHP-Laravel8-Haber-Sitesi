@extends('layouts.main')

@section('title', $setting->title )
@section('pagetitle', "$data->title ")
@section('keywords', $setting->keywords)
@section('css')
    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}
        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }
        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }
        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }
        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        .active, .dot:hover {
            background-color: #717171;
        }
        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }
        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }
        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
    </style>
@endsection
@section('content')
    <section id="category_section" class="category_section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="entity_wrapper">
                        <div class="entity_title">
                            <h1><a href="#">{{$data->title}}</a></h1>
                        </div>
                        <!-- entity_title -->
                        @php
                            $avgrev = \App\Http\Controllers\HomeController::avrgreviews($data->id);
                            $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
                        @endphp
                        <div class="entity_meta"><a href="#" target="_self">{{$data->user_id}}. Kullanıcı Tarafından <a href="#" target="_self">{{$data->created_at}}</a> tarihinde yayınlandı.</a>
                        </div>
                        <!-- entity_meta -->

                        <div class="entity_rating">
                            Değerlendirme: {{$countreview}} <i class="fa fa-star"></i>/ {{$avgrev}}
                        </div>
                        <!-- entity_rating -->

                        <div class="entity_thumb">
                            <img class="img-responsive" src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" alt="feature-top">
                        </div>
                        <!-- entity_thumb -->

                        <div class="entity_social">
                            <a href="#" class="icons-sm sh-ic">
                                <i class="fa fa-share-alt"></i>
                                <b>424</b> <span class="share_ic">Paylaş</span>
                            </a>
                            <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
                            <!--Linkedin-->
                            <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
                            <!--Pinterest-->
                            <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                        </div>
                        <!-- entity_social -->
                        <div class="entity_thumb">
                            @if($datalist !=null)
                                <div class="slideshow-container">
                                    @foreach($datalist as $rs)
                                        <div class="mySlides fade">
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="{{$rs->alt}}" style="width:100%">
                                            <div class="text">{{$rs->title}}</div>
                                        </div>
                                    @endforeach
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                </div>
                                <br>

                                <div style="text-align:center">
                                    <span class="dot" onclick="currentSlide(1)"></span>
                                    <span class="dot" onclick="currentSlide(2)"></span>
                                    <span class="dot" onclick="currentSlide(3)"></span>
                                </div>
                            @endif
                        </div>
                        <!-- entity_slider olacak-->

                        <div class="entity_content">
                            <p>
                                {!! $data->detail !!}
                            </p>

                            <p>
                                Nor again is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but because occasionally circumstances occur in which toil and pain
                                can procure him some great pleasure. To take a trivial example, which of us ever
                                undertakes laborious physical exercise, except to obtain some advantage from it?
                            </p>

                            <blockquote class="pull-left">{{$data->description}}
                            </blockquote>
                            <p> But who has any right to find fault with a man who chooses to enjoy a pleasure that has
                                no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
                                On the other hand, we denounce with righteous indignation and dislike men who are so
                                beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,
                                that they cannot foresee.Nor again is there anyone who loves or pursues or desires to
                                obtain pain of itself, because it is pain, but because occasionally circumstances occur
                                in which toil and pain can procure him some great pleasure. To take a trivial example,
                                which of us ever undertakes laborious physical exercise, except to obtain some advantage
                                from it? Nor again is there anyone who loves or pursues or desires to obtain pain of
                                itself, because it is pain, but because occasionally circumstances occur in which toil
                                and pain can procure him some great pleasure. To take a trivial example, which of us
                                ever
                            </p>

                            <p>
                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I will give you a complete account of the system, and expound the
                                actual teachings of the great explorer of the truth, the master-builder of human
                                happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                                but because those who do not know how to pursue pleasure rationally encounter
                                consequences that are extremely painful.
                            </p>
                        </div>
                        <!-- entity_content -->

                        <div class="entity_footer">
                            <div class="entity_tag">
                                <span class="blank"><a href="#">Tech</a></span>
                                <span class="blank"><a href="#">Transport</a></span>
                                <span class="blank"><a href="#">Mobile</a></span>
                                <span class="blank"><a href="#">Gadgets</a></span>
                            </div>
                            <!-- entity_tag -->

                            <div class="entity_social">
                                <span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span>
                                <span><i class="fa fa-comments-o"></i> {{$countreview}}  <a href="#">Yorum</a> </span>
                            </div>
                            <!-- entity_social -->

                        </div>
                        <!-- entity_footer -->

                    </div>
                    <!-- entity_wrapper -->

                    <div class="related_news">
                        <div class="entity_inner__title header_purple">
                            <h2><a href="#">Alakalı haberler</a></h2>
                        </div>
                        <!-- entity_title -->

                        <div class="row">
                            @foreach($kategori as $rs)
                                <div class="col-md-6">

                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#"><img class="media-object" height="150px" width="150px" src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"
                                                             alt="{{$rs->title}}"></a>
                                        </div>
                                        <div class="media-body">
                                            <span class="tag purple"><a href="category.html" target="_self">{{$rs->category_id}}</a></span>

                                            <h3 class="media-heading"><a href="{{route('news',['id' => $rs->id, 'slug' => $rs->slug ])}}" target="_self">{{$rs->title}}</a></h3>
                                            <span class="media-date"><a href="#">{{$rs->created_at}}</a>,  <a href="#">{{$rs->user_id}} Tarafından</a></span>

                                            <div class="media_social">
                                                <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                                                <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Related news -->

                    <div class="widget_advertisement">
                        <img class="img-responsive" src="{{asset('assets')}}/img/category_advertisement.jpg" alt="feature-top">
                    </div>
                    <!--Advertisement-->

                    <div class="readers_comment">
                        <div class="entity_inner__title header_purple">
                            <h2>Okuyucular Yorumu</h2>
                        </div>
                        <!-- entity_title -->
                        @foreach($reviews as $rs)
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img alt="64x64" class="media-object" data-src="{{asset('assets')}}/img/reader_img1.jpg"
                                         src="{{asset('assets')}}/img/reader_img1.jpg" data-holder-rendered="true">
                                </a>
                            </div>

                                <div class="media-body">
                                    <h2 class="media-heading"><a href="#">{{$rs->user->name}}</a></h2>
                                    <H3>{{$rs->subject}}</H3>
                                    <P>{{$rs->review}}</P>

                                    <div class="entity_vote">
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                                        <a href="#"><span class="reply_ic">Reply </span></a>
                                    </div>
                                    <div class="media">
                                    </div>
                                </div>

                        </div>
                        <!-- media end -->
                        @endforeach
                    </div>
                    <!--Readers Comment-->

                    <div class="widget_advertisement">
                        <img class="img-responsive" src="{{asset('assets')}}/img/category_advertisement.jpg" alt="feature-top">
                    </div>
                    <!--Advertisement-->

                    <div class="entity_comments">
                        <div class="entity_inner__title header_black">
                            <h2>Yorum ekle</h2>
                        </div>
                        <!--Entity Title -->
                        <div class="entity_comment_from">
                        @livewire('review',['id' => 1])
                        </div>
                    </div>
                    <!--Entity Comments -->

                </div>
                <!-- Left Section -->

                <div class="col-md-4">
                    @include('home.sidebar.one')
                    @include('home.sidebar.ads1')
                    @include('home.sidebar.ads2')
                    @include('home.sidebar.two')
                    @include('home.sidebar.ads3')
                    @include('home.sidebar.three')
                    @include('home.sidebar.four')
                    @include('home.sidebar.ads4')
                    @include('home.sidebar.five')
                    @include('home.sidebar.ads5')
                </div>
                <!-- Right Section -->
            </div>
            <!-- Row -->
        </div>
        <!-- Container -->
    </section>
@endsection
@section('footerjs')
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>

@endsection
