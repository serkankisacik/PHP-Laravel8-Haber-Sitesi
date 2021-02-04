@extends('layouts.main')

@section('title', $setting->title )

@section('description')
{{$setting->description}}
@endsection
@section('keywords', $setting->keywords)
@section('content')
    <section id="category_section" class="category_section">
        <div class="container">
            <div class="entity_content">
                <h1 align="center">{{$setting->title}} İletişim Bilgileri</h1>
                <h2 align="center">{{$setting->contact}}</h2>
                <p>Adres:{{$setting->address}}</p>
                <p>Telefon: {{$setting->phone}}</p>
                <p>Fax: {{$setting->fax}}</p>
                <p>E-posta: {{$setting->email}}</p>
                <blockquote class="pull-left">
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
                </blockquote>
            </div>
            <!-- Row -->
        </div>
        <!-- Container -->
    </section>
@endsection

