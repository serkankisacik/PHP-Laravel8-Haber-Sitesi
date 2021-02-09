@extends('layouts.main')

@section('title', $setting->title )
@section('pagetitle', "Kullanıcı Profili")
@section('keywords', $setting->keywords)
@section('content')
    <section id="category_section" class="category_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    Kullanıcı profili
                </div>
                <!-- Left Section -->

                <div class="col-md-3">
                    @include('home.usermenu')
                </div>
                <!-- Right Section -->
            </div>
            <!-- Row -->
        </div>
        <!-- Container -->
    </section>
    <!-- Category News Section -->
@endsection

