@extends('layouts.main')

@section('title', $setting->title )
@section('pagetitle', $search ." Sonuçları ")
@section('keywords', $setting->keywords)
@section('content')
    <section id="category_section" class="category_section">
        <div class="container">
            <div class="entity_content">
                <div class="row">
                    <div class="col-md-8">
                            <div class="row">
                                @foreach($datalist as $rs)<div class="col-md-6">
                                    <div class="category_article_body">
                                        <div class="top_article_img">
                                            <img class="img-responsive" src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" alt="feature-top" height="300px">
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

                                    </div>
                                    <!-- category_article_body -->
                                </div>
                                <!-- col-md-6 -->
                                @endforeach
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
                                    <li><a href="#">Deneme</a></li>
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

