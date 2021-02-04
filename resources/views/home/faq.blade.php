@extends('layouts.main')

@section('title', $setting->title )
@section('pagetitle', "Sıkça Sorulan Sorular" )
@section('description')
{{$setting->description}}
@endsection
@section('keywords', $setting->keywords)
@section('content')
    <section id="category_section" class="category_section">
        <div class="container">
            <div class="entity_content">
                <h1 align="center">{{$setting->title}} Sıkça Sorulan Sorular</h1>
                <blockquote class="pull-left">{{$setting->faq}}
                </blockquote>
            </div>
            <!-- Row -->
        </div>
        <!-- Container -->
    </section>
@endsection

