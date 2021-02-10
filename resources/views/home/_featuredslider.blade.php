@section('css')
    <style>
        * {box-sizing:border-box}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
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
    </style>
@endsection

<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->

                        @foreach($slider as $rs)
                        @php
                            $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                        @endphp
                        <div class="mySlides fade">
                        <div class="numbertext">{{$rs->id}} / 3</div>
                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="width:100%">
                            <div class="feature_article_inner">
                                <div class="tag_lg red"><a href="category.html">Son Dakika</a></div>
                                <div class="feature_article_title">
                                    <h1><a href="single.html" target="_self">{{$rs->title}} </a></h1>
                                </div>
                                <!-- feature_article_title -->

                                <div class="feature_article_date">
                                    <a href="#" target="_self">Kategori {{$rs->category_id}}</a>
                                    <a href="#" target="_self">Kullanıcı {{$rs->user_id}}</a>
                                    <a href="#"target="_self">Yayınlanma {{$rs->created_at}}</a></div>
                                <!-- feature_article_date -->

                                <div class="feature_article_content">
                                    {{$rs->detail}}
                                </div>
                                <!-- feature_article_content -->

                                <div class="article_social">
                                    <span><i class="fa fa-share-alt"></i><a href="#">424</a>Shares</span>
                                    <span><i class="fa fa-comments-o"></i><a href="#">{{$countreview}} </a>Yorum</span>
                                </div>
                                <!-- article_social -->
                                <p class="divider"><a href="{{route('news',['id' => $rs->id, 'slug' => $rs->slug ])}}">Devamı&nbsp;&raquo;</a></p>
                            </div>
                        </div>
                        @endforeach


                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
            <!-- col-md-7 -->
            @foreach($usthaber as $rs)
                @php
                    $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                @endphp
            <div class="col-md-5">
                <div class="feature_static_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive" src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="feature-top">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg purple"><a href="category.html">{{$rs->category->title}}</a></div>
                        <div class="feature_article_title">
                            <h1><a href="single.html" target="_self">{{$rs->title}} </a></h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="#" target="_self">{{$rs->user->name}}</a>,<a href="#" target="_self">{{$rs->created_at}}</a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                            {{$rs->description}}
                        </div>
                        <!-- feature_article_content -->

                        <div class="article_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">424</a>Shares</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">{{$countreview}}</a>Yorum</span>
                        </div>
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                <!-- feature_static_wrapper -->
            </div>
            <!-- col-md-5 -->
            @endforeach
            <!-- col-md-5 -->
            <div class="col-md-5">
                <div class="feature_static_wrapper">

                </div>
                <!-- feature_static_wrapper -->
            </div>
        </div>
        <!-- Row -->

    </div>
    <!-- container -->
</section>
<!-- Feature News Section -->
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
