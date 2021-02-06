@php($parentCategories= \App\Http\Controllers\HomeController::categorylist())
<ul class="nav navbar-nav main-nav">
    @foreach($parentCategories as $rs)
        <li class="dropdown m-menu-fw"><a href="{{route('category',['id'=>$rs->id, 'slug'=>$rs->slug])}}" >{{$rs->title}}
                <span><i class="fa fa-angle-down"></i></span></a>
            <ul class="dropdown-menu">

                <li>
                    <div class="m-menu-content">
                        @if(count($rs->children))
                                    @include('home/categorytree', ['children'=>$rs->children])
                        @endif
                    </div>
                </li>
            </ul>
        </li>
    @endforeach
    <li><a href="blog.html">Design</a></li>
</ul>

