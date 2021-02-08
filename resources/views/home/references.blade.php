@extends('layouts.main')

@section('title', $setting->title )
@section('pagetitle', "Referanslar" )
@section('description')
{{$setting->description}}
@endsection
@section('keywords', $setting->keywords)
@section('content')
    <section id="category_section" class="category_section">
        <div class="container">
            <div class="entity_content">
                <h1 align="center"><i class="fa fa-certificate fa-5x"></i></h1>
                <h1 align="center">{{$setting->title}} Referansları</h1>
                <p>{{$setting->references}}</p>
            </div>
            <!-- Row -->
        </div>
        <!-- Container -->
    </section>
@endsection

