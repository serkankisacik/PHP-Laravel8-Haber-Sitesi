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

<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="{{asset('assets')}}/img/feature-static2.jpg" style="width:100%">
                        <div class="feature_article_inner">
                            <div class="tag_lg red"><a href="category.html">Son Dakika</a></div>
                            <div class="feature_article_title">
                                <h1><a href="single.html" target="_self">Chevrolet car-saving technology delivers </a></h1>
                            </div>
                            <!-- feature_article_title -->

                            <div class="feature_article_date"><a href="#" target="_self">Stive Clark</a>,<a href="#"
                                                                                                            target="_self">Aug
                                    4, 2015</a></div>
                            <!-- feature_article_date -->

                            <div class="feature_article_content">
                                In a move to address mounting concerns about security on Android, Google and Samsung are
                                now issuing.
                            </div>
                            <!-- feature_article_content -->

                            <div class="article_social">
                                <span><i class="fa fa-share-alt"></i><a href="#">424</a>Shares</span>
                                <span><i class="fa fa-comments-o"></i><a href="#">4</a>Comments</span>
                            </div>
                            <!-- article_social -->

                        </div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="{{asset('assets')}}/img/feature-static2.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="{{asset('assets')}}/img/feature-static2.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

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

            <div class="col-md-5">
                <div class="feature_static_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive" src="{{asset('assets')}}/img/feature-static1.jpg" alt="feature-top">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg purple"><a href="category.html">Top Viewed</a></div>
                        <div class="feature_article_title">
                            <h1><a href="single.html" target="_self">Alcatel's $180 Idol 3 4.7 is a </a></h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="#" target="_self">Stive Clark</a>,<a href="#"
                                                                                                        target="_self">Aug
                                4, 2015</a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                            In a move to address mounting concerns about security on Android...
                        </div>
                        <!-- feature_article_content -->

                        <div class="article_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">424</a>Shares</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>Comments</span>
                        </div>
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                <!-- feature_static_wrapper -->

            </div>
            <!-- col-md-5 -->

            <div class="col-md-5">
                <div class="feature_static_last_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive" src="{{asset('assets')}}/img/feature-static2.jpg" alt="feature-top">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg blue"><a href="category.html">Top Viewed</a></div>

                        <div class="feature_article_title">
                            <h1><a href="single.html" target="_self">Gadget user good news</a></h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="#" target="_self">Stive Clark</a>,<a href="#"
                                                                                                        target="_self">Aug
                                4, 2015</a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                            In a move to address mounting concerns about security on Android...
                        </div>
                        <!-- feature_article_content -->

                        <div class="article_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">424</a>Shares</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>Comments</span>
                        </div>
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                <!-- feature_static_wrapper -->

            </div>
            <!-- col-md-5 -->

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
