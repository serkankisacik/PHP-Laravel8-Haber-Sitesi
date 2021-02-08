<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">{{\Illuminate\Support\Facades\Auth::user()->name}}</a></h2>

    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><i class="fa fa-pagelines"></i></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="{{route('myprofile')}}" target="_self">Pano</a>
            </h3>

        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><i class="fa fa-pencil "></i></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Yazılarım</a>
            </h3>

        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><i class="fa fa-comment "></i></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="{{route('myreviews')}}" target="_self">Yorumlarım</a>
            </h3>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><i class="fa fa-user "></i></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Hesap detayları</a>
            </h3>
        </div>
    </div>
    <p class="widget_divider"><a href="{{route('logout')}}" target="_self">Çıkış yap&nbsp;&nbsp;&raquo; </a></p>
</div>
<!-- Sidebar Three News -->
