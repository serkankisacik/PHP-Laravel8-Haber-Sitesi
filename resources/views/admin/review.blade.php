@extends('layouts.admin')
@section('title','Admin Panel Kategori Sayfası')
@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Yorumler</h2>
                    <h5>Bu sayfada Yorumlerin listesini görmektesin. </h5>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Haber Başlığı</th>
                                <th>Kullanıcı</th>
                                <th>Yorum</th>
                                <th>Derecelendirme</th>
                                <th>IP Adresi</th>
                                <th>Status</th>
                                <th>Oluşturma</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->news->title}}</td>
                                <td>{{$rs->user->name}}</td>
                                <td>{{$rs->review}}</td>
                                <td>{{$rs->rate}}</td>
                                <td>{{$rs->ip}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->created_at}}</td>
                                <td><a href="{{route('admin_review_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')" ><button class="btn btn-primary"><i class="fa fa-edit "></i>  Düzenle</button></a>
                                    <a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Silmek istediğinize emnin misiniz?')"><button class="btn btn-danger"><i class="fa fa-eraser"></i> Sil</button></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('admin_news_add')}}" class="btn btn-default">Yorum Ekle</a>
                    </div>
                </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
