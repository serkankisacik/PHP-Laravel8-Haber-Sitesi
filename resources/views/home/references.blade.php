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
                <h1 align="center">{{$setting->title}} Referansları</h1>
                <blockquote class="pull-left">{{$setting->references}}
                </blockquote>
            </div>
            <!-- Row -->
        </div>
        <!-- Container -->
    </section>
@endsection

