
<div class="category_section tablet">
    <div class="article_title header_pink">
        <h2><a href="category.html" target="_self">Asayiş</a></h2>
    </div>

    <div class="category_article_wrapper">
        <div class="row">@foreach($kategoriiki as $rs)
                @php
                    $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                @endphp
            <div class="col-md-6">
                <div class="category_article_body">

                    <div class="top_article_img">
                        <a href="{{route('news',['id' => $rs->id, 'slug' => $rs->slug ])}}" target="_self"><img class="img-responsive" src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"
                                                                  alt="{{$rs->description}}">
                        </a>
                    </div>
                    <!-- top_article_img -->

                    <span class="tag pink"><a href="{{route('category',['id' => $rs->category_id, 'slug' => $rs->category->slug ])}}" target="_self">{{$rs->category->title}}</a></span>

                    <div class="category_article_title">
                        <h2><a href="{{route('news',['id' => $rs->id, 'slug' => $rs->slug ])}}" target="_self">{{$rs->title}}</a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="article_date"><a href="#">{{$rs->created_at}} </a>, <span><a href="#"> {{$rs->user->name}}</a> Tarafından</span><br></div>
                    <!----article_date------>
                    <!-- article_date -->

                    <div class="category_article_content">
                        {{$rs->detail}}
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                        <span><i class="fa fa-comments-o"></i><a href="{{route('news',['id' => $rs->id, 'slug' => $rs->slug ])}}"> {{$countreview}} </a> Comments</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->
            @endforeach
        </div>
        <!-- row -->

    </div>
    <!-- category_article_wrapper -->

    <p class="divider"><a href="#">More News&nbsp;&raquo;</a></p>
</div>
<!-- Category Two Section -->
