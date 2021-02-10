<div class="widget hidden-xs m30">
    @if($setting->facebook !=null)
        <a class="icons-sm fb-ic" href="{{$setting->facebook}}" target="_blank"><img class="img-responsive adv_img" src="{{asset('assets')}}/img/right_add1.jpg" alt="add_one"></i></a>
    @endif
<!--Twitter-->
    @if($setting->twitter !=null)
        <a class="icons-sm fb-ic" href="{{$setting->twitter}}" target="_blank"><<img class="img-responsive adv_img" src="{{asset('assets')}}/img/right_add2.jpg" alt="add_one"></a>
    @endif
<!--Instagram +-->
    @if($setting->instagram !=null)
        <a class="icons-sm fb-ic" href="{{$setting->instagram}}" target="_blank"><img class="img-responsive adv_img" src="{{asset('assets')}}/img/right_add3.jpg" alt="add_one"></i></a>
    @endif
<!--Youtube-->
    @if($setting->youtube !=null)
        <a class="icons-sm fb-ic" href="{{$setting->youtube}}" target="_blank"><img class="img-responsive adv_img" src="{{asset('assets')}}/img/right_add4.jpg" alt="add_one"></i></a>
    @endif
</div>
