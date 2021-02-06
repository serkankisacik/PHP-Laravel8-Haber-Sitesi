@extends('layouts.main')

@section('title', $setting->title )
@section('pagetitle', $data->title)
@section('keywords', $setting->keywords)
@section('content')
    <section id="category_section" class="category_section">
        <div class="container">
            <div class="entity_content">
                <section class="breadcrumb_section">
                    <div class="container">
                        <div class="row">
                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">{{$setting->title}}</a></li>
                                <li><a href="{{route('category',['id'=>$data->id, 'slug'=>$data->slug])}}">{{$data->title}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title)}}</a></li>
                            </ol>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-md-8">
                            <div class="entity_wrapper">
                                <div class="entity_title header_purple">
                                    <h1><a href="{{route('category',['id'=>$data->id, 'slug'=>$data->slug])}}">{{$data->title}} Haberleri</a></h1>
                                </div>
                                <!-- entity_title -->

                                <div class="entity_thumb">
                                    <img class="img-responsive" src="{{ \Illuminate\Support\Facades\Storage::url($data->image) }}" alt="feature-top">
                                </div>
                                <!-- entity_thumb -->

                                <div class="entity_title">
                                    <a href="single.html" target="_blank"><h3> {{$data->description}} </h3></a>
                                </div>
                                <!-- entity_title -->

                                <div class="entity_meta">
                                    <a href="#">Kim tarafından</a>, Toplam haber sayısı <a href="#">1500</a>
                                </div>
                                <!-- entity_meta -->

                                <div class="entity_content"></div>
                                <!-- entity_content -->

                                <div class="entity_social"></div>
                                <!-- entity_social -->

                            </div>
                            <!-- Kategori Başlık Alanı -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="category_article_body">
                                        @foreach($datalist as $rs)
                                        <div class="top_article_img">
                                            <img class="img-responsive" src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" alt="feature-top" height="">
                                        </div>
                                        <div class="category_article_title">
                                            <h5><a href="{{route('news', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" target="_blank">{{$rs->title}}</a></h5>
                                        </div>
                                        <div class="article_date">
                                            <a href="#">Tarih: {{$rs->created_at}}</a>, <a href="#">{{$rs->user_id}}. Kullanıcı</a>
                                        </div>
                                        <div class="category_article_content">
                                           {!! $rs->detail !!}
                                        </div>
                                        <div class="article_social">
                                            <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                                            <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- category_article_body -->

                                </div>
                                <!-- col-md-6 -->

                                <div class="col-md-6">
                                    <div class="category_article_body">
                                        <div class="top_article_img">
                                            <img class="img-responsive" src="{{asset('assets')}}/img/category_img2.jpg" alt="feature-top">
                                        </div>
                                        <!-- top_article_img -->

                                        <div class="category_article_title">
                                            <h5><a href="single.html" target="_blank">Airbnb launches photo-centric app for iPads and Android
                                                    tablets. </a></h5>
                                        </div>
                                        <!-- category_article_title -->

                                        <div class="article_date">
                                            <a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                                        </div>
                                        <!-- article_date -->

                                        <div class="category_article_content">
                                            Collaboratively administrate empowered markets via plug-and-play networks.
                                            Dynamically procrastinate B2C users after installed base benefits. Dramatically
                                            visualize customer directed convergence without revolutionary ROI.
                                        </div>
                                        <!-- category_article_content -->

                                        <div class="article_social">
                                            <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                                            <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                                        </div>
                                        <!-- article_social -->

                                    </div>
                                    <!-- category_article_body -->
                                </div>
                                <!-- col-md-6 -->

                            </div>
                            <!-- row -->

                            <div class="widget_advertisement">
                                <img class="img-responsive" src="{{asset('assets')}}/img/category_advertisement.jpg" alt="feature-top">
                            </div>

                            <nav aria-label="Page navigation" class="pagination_section">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next" class="active"> <span aria-hidden="true">&raquo;</span> </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- navigation -->

                        </div>
                    <!-- Left Section md-8 -->
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
            <!-- Entity content -->
        </div>
            <!-- Container -->
    </section>
    <!-- Category News Section -->
@endsection

