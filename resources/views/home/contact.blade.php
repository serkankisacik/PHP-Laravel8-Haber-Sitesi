@extends('layouts.main')

@section('title', $setting->title )
@section('pagetitle', "İletişim Bilgileri")
@section('description')
{{$setting->description}}
@endsection
@section('keywords', $setting->keywords)
@section('content')
    <section id="category_section" class="category_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h1 align="center"><i class="fa fa-phone fa-5x"></i></h1>
                    <h1 align="center">{{$setting->title}} İletişim Bilgileri</h1>
                    <h2 align="center">{!! $setting->contact !!}</h2>
                    <br>
                    @include('home.message')
                    <form action="{{route('sendmessage')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="form-group form-group-lg">
                            <label class="col-md-2 control-label" for="formGroupInputLarge">İsim:</label>
                            <div class="col-md-4">
                                <input type="text" id="name" name="name" class="form-control input-lg">
                            </div>
                            <label class="col-md-2 control-label" for="formGroupInputLarge">E-posta:</label>
                            <div class="col-md-4">
                                <input type="text" id="email" name="email" class="form-control input-lg">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <label class="col-md-2 control-label" for="formGroupInputLarge">Telefon:</label>
                            <div class="col-md-4">
                                <input type="text" id="phone" name="phone" class="form-control input-lg">
                            </div>
                            <label class="col-md-2 control-label" for="formGroupInputLarge">Konu:</label>
                            <div class="col-md-4">
                                <input type="text" id="subject" name="subject" class="form-control input-lg">
                            </div>

                        </div>
                        <div class="form-group form-group-lg">
                            <label class="col-md-2 control-label" for="formGroupInputLarge">Mesajınız:</label>
                            <textarea type="text" id="message" name="message" class="form-control input-lg"></textarea>
                        </div>
                        <div class="form-group form-group-lg">
                            <label class="col-md-2 control-label" for="formGroupInputLarge">Görüntü:</label>
                            <div class="col-md-10">
                                <input type="file" id="file" name="file" class="form-control input-lg">
                            </div>
                        </div>
                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            <input type="submit" value="Gönder" class="btn btn-large pink">
                        </div>
                    </form>

                </div>
                <!-- Left Section -->

                <div class="col-md-3">
                    <h3>Adres:{{$setting->address}}<br>Telefon: {{$setting->phone}}<br>Fax: {{$setting->fax}}<br>E-posta: {{$setting->email}}</h3>


                    <div class="social">
                        <h2>Sosyal Medya</h2>
                        @if($setting->facebook !=null)
                            <a class="icons-sm fb-ic" href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                        @endif
                    <!--Twitter-->
                        @if($setting->twitter !=null)
                            <a class="icons-sm fb-ic" href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                        @endif
                    <!--Instagram +-->
                        @if($setting->instagram !=null)
                            <a class="icons-sm fb-ic" href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
                        @endif
                    <!--Youtube-->
                        @if($setting->youtube !=null)
                            <a class="icons-sm fb-ic" href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a>
                        @endif
                    </div>
                </div>
                <!-- Right Section -->
            </div>
            <!-- Row -->
        </div>
        <!-- Container -->
    </section>
    <!-- Category News Section -->
@endsection

