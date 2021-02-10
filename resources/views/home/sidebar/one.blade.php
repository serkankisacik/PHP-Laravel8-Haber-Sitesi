<div class="widget">
    <div class="widget_title widget_black">
        <h2><a href="#">En son haberler</a></h2>
    </div>
    @foreach($sidebarbir as $rs)
        @php
            $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
        @endphp
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" height="100px" alt="{{$rs->title}}"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">{{$rs->title}}</a>
            </h3> <span class="media-date"><a href="#">{{$rs->created_at}} </a>, <span><a href="#"> {{$rs->user->name}}</a> Tarafından</span><br></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span>
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>{{$countreview}}</a> Yorum
                </span>
            </div>
        </div>
    </div>
    @endforeach
    <p class="widget_divider"><a href="#" target="_self">Son haberler&nbsp;&raquo;</a></p>
</div>
<!-- Sidebar One -->
