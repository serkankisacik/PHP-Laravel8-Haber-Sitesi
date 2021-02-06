@php($parentCategories= \App\Http\Controllers\HomeController::categorylist())
<div class="navigation-section">
    <nav class="navbar m-menu navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                <ul class="nav navbar-nav main-nav">
                    @foreach($parentCategories as $rs)
                    <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">{{$rs->title}}<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="m-menu-content">

                                        @if(count($rs->children))
                                            @include('home.categorytree', ['children'=>$rs->children])
                                        @endif
                                </div>
                            </li>
                        </ul>
                    </li>
                    @endforeach
                </ul>

            </div>
            <!-- .navbar-collapse -->
        </div>
        <!-- .container -->
    </nav>
    <!-- .nav -->
</div>

