@extends('layouts.admin')
@section('title','Admin Paneli Kullanıcı İşlemleri')
@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Kullanıcı işlemleri</h2>
                    <h5>Hoşgeldin @if (Route::has('login'))
                            @auth
                                {{\Illuminate\Support\Facades\Auth::user()->name}}
                            @endauth
                        @endif , seni tekrar görmek güzel. </h5>
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <hr>
                    @include('home.message')
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Profil resmi</th>
                                    <th>İsim</th>
                                    <th>E-posta</th>
                                    <th>Adres</th>
                                    <th>Telefon</th>
                                    <th>Yetkisi</th>
                                    <th>İşlem</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>@if($rs->profile_photo_path)
                                                <img class="h-10 w-10 rounded-full" src="{{ \Illuminate\Support\Facades\Storage::url($rs->profile_photo_path) }}" height="65px" alt="">
                                            @endif</td>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->email}}</td>
                                        <td>{{$rs->address}}</td>
                                        <td>{{$rs->phone}}</td>
                                        <td>@foreach($rs->roles as $row)
                                                {{$row->name}}
                                            @endforeach
                                            <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')"><i class="fa fa-plus-circle"></i> </a></td>
                                        <td><a href="{{route('admin_user_edit',['id'=>$rs->id])}}"><button class="btn btn-primary"><i class="fa fa-edit "></i>  Düzenle</button></a>
                                            <a href="{{route('admin_user_delete',['id'=>$rs->id,])}}" onclick="return confirm('Silmek istediğinize emnin misiniz?')"><button class="btn btn-danger"><i class="fa fa-eraser"></i> Sil</button></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="{{route('admin_user_add')}}" class="btn btn-default">Kullanıcı Ekle</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

        </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
