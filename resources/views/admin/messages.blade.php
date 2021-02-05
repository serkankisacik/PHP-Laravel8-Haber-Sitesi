@extends('layouts.admin')
@section('title','Admin Panel Mesajlar Sayfası')
@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>İletişim Formları</h2>
                    <h5>Bu sayfada iletişim formlarının listesini görmektesin. </h5>

                </div>
            </div>
            @include('home.message')
            <!-- /. ROW  -->
            <hr />
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>İsim</th>
                                <th>E-posta</th>
                                <th>Telefon</th>
                                <th>Konu</th>
                                <th>Mesaj</th>
                                <th>Admin Notu</th>
                                <th>IP</th>
                                <th>Ek Dosya</th>
                                <th>Durum</th>
                                <th>Oluşturma</th>
                                <th>Değiştirme</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->email}}</td>
                                <td>{{$rs->phone}}</td>
                                <td>{{$rs->subject}}</td>
                                <td><a onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')" href="{{route('admin_message_edit',['id'=>$rs->id])}}"><i class="fa fa-file fa-3x"></i></a> </td>
                                <td>{{$rs->note}}</td>
                                <td>{{$rs->ip}}</td>
                                <td>@if($rs->file)
                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->file) }}" height="50">
                                    @endif
                                </td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->created_at}}</td>
                                <td>{{$rs->updated_at}}</td>
                                 <td><a href="{{route('admin_message_edit',['id'=>$rs->id])}}"><button class="btn btn-primary"><i class="fa fa-edit "></i>  Düzenle</button></a>
                                    <a href="{{route('admin_message_delete',['id'=>$rs->id])}}" onclick="return confirm('Silmek istediğinize emnin misiniz?')"><button class="btn btn-danger"><i class="fa fa-eraser"></i> Sil</button></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
