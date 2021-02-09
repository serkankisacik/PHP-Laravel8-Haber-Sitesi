@extends('layouts.main')

@section('title', $setting->title )
@section('pagetitle', "Kullanıcı Yorumları")
@section('keywords', $setting->keywords)
@section('content')
    <section id="category_section" class="category_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Sıra</th>
                                    <th>Haber</th>
                                    <th>Konu</th>
                                    <th>Yorum</th>
                                    <th>IP</th>
                                    <th>Derecelendirme</th>
                                    <th>Tarih</th>
                                    <th>{{$setting->title}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @include('home.message')
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td><a href="{{route('news',['id'=>$rs->news->id,'slug'=>$rs->news->slug])}}" target="_blank">{{$rs->news->title}}</a> </td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->review}}</td>
                                        <td>{{$rs->ip}}</td>
                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->created_at}}</td>
                                        <td> <a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Silmek istediğinize emnin misiniz?')"><button class="btn btn-danger"><i class="fa fa-eraser"></i> Sil</button></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

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

