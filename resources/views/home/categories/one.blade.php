    <div class="category_section mobile">
        <div class="article_title header_purple">
            <h2><a href="category.html" target="_self">{{$setting->title}}</a></h2>
        </div>
        <!----article_title------>
        <div class="category_article_wrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="top_article_img">
                        <a href="single.html" target="_self"><img class="img-responsive"
                                                                  src="{{asset('assets')}}/img/cat-mobi-left-1.jpg" alt="feature-top">
                        </a>
                    </div>
                    <!----top_article_img------>
                </div>
                <div class="col-md-6">
                    <span class="tag purple">Serkan Kısacık</span>

                    <div class="category_article_title">
                        <h2><a href="single.html" target="_self"> {{$setting->title}}'e hoş geldiniz  </a></h2>
                    </div>
                    <!----category_article_date------>
                    <div class="category_article_content">
                    </div>
                    <!----category_article_content------>
                    <!----media_social------>
                </div>
            </div>
        </div>
        <div class="category_article_wrapper">
            <div class="row">
                @foreach($kategoribir as $rs)
                    @php
                        $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                    @endphp
                <div class="col-md-6">

                    <div class="media">
                        <div class="media-left">
                            <a href="{{route('news',['id' => $rs->id, 'slug' => $rs->slug ])}}"><img class="media-object" src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="{{$rs->description}}" height="150px"></a>
                        </div>
                        <div class="media-body">
                            <span class="tag purple"><a href="{{route('category',['id' => $rs->category_id, 'slug' => $rs->category->slug ])}}" target="_self">{{$rs->category->title}}</a></span>

                            <h3 class="media-heading"><a href="{{route('news',['id' => $rs->id, 'slug' => $rs->slug ])}}" target="_self">{{$rs->title}}</a></h3>
                            <span><a href="#"> {{$rs->user->name}}</a> Tarafından</span><br>
                            <span class="media-date"><a href="#">{{$rs->created_at}}</a></span><br>

                            <div class="media_social">
                                <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                                <span><a href="{{route('news',['id' => $rs->id, 'slug' => $rs->slug ])}}"><i class="fa fa-comments-o"></i> {{$countreview}} </a> Yorum</span>
                            </div>
                        </div>
                    </div>

                    <div class="media">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <p class="divider"><a href="#">Daha fazla&nbsp;&raquo;</a></p>
    </div>
    <!-- Category 1 Section -->
