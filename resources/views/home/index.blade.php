@extends('layouts.main')

@section('title', 'Ulag News - Yurttan Dünyadan Haberler')

@section('description')
    Haber ve son dakika haberleri, güncel haberler, magazin, spor ve ekonomideki gelişmeler, yerel ve dünya haberleri Ulag'da.
@endsection
@section('keywords', 'Ulag, news, Haber')
@section('content')
    @include('home._featured')
    <section id="category_section" class="category_section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @include('home.categories.one')
                    @include('home.categories.two')
                    @include('home.categories.three')
                    @include('home.categories.four')
                    @include('home.categories.five')
                </div>
                <!-- Left Section -->

                <div class="col-md-4">
                @include('home.sidebar.one')
                    @include('home.sidebar.ads1')
                    @include('home.sidebar.ads2')
                    @include('home.sidebar.two')
                    @include('home.sidebar.ads3')
                    @include('home.sidebar.three')
                    @include('home.sidebar.four')
                    @include('home.sidebar.ads4')
                    @include('home.sidebar.five')
                    @include('home.sidebar.ads5')
                </div>
                <!-- Right Section -->
            </div>
            <!-- Row -->
        </div>
        <!-- Container -->
    </section>
    <!-- Category News Section -->

    @include('home.categories.videos')

@endsection
