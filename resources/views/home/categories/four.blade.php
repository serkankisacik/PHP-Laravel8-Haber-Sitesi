<div class="category_section camera">
    <div class="article_title header_orange">
        <h2><a href="category.html" target="_self">Yerel</a></h2>
    </div>
    <!-- article_title -->
    @foreach($kategoridort as $rs)
        @php
            $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
        @endphp
    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-5">
                <div class="top_article_img">
                    <a href="{{route('news',['id' => $rs->id, 'slug' => $rs->slug ])}}" target="_self">
                        <img class="img-responsive" src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="{{$rs->description}}">
                    </a>
                </div>
                <!-- top_article_img -->

            </div>
            <div class="col-md-7">
                <span class="tag orange"><a href="{{route('category',['id' => $rs->category_id, 'slug' => $rs->category->slug ])}}" target="_self">{{$rs->category->title}}</a></span>

                <div class="category_article_title">
                    <h2><a href="{{route('news',['id' => $rs->id, 'slug' => $rs->slug ])}}" target="_self">{{$rs->title}} </a></h2>
                </div>
                <!-- category_article_title -->

                <div class="article_date"><a href="#">{{$rs->created_at}}</a>, <span><a href="#"> {{$rs->user->name}}</a> Tarafından</span><br></div>
                <!----article_date------>
                <!-- category_article_wrapper -->

                <div class="category_article_content">
                    {{$rs->detail}}
                </div>
                <!-- category_article_content -->

                <div class="media_social">
                    <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Paylaşım</span>
                    <span><i class="fa fa-comments-o"></i><a href="#">{{$countreview}}</a> Yorum</span>
                </div>
                <!-- media_social -->

            </div>
            <!-- col-md-7 -->

        </div>
        <!-- row -->

    </div>
    <!-- category_article_wrapper -->
    @endforeach

    <p class="divider"><a href="#">More News&nbsp;&raquo;</a></p>
</div>
<!-- Category Four Section -->
