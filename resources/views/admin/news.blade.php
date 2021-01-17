@extends('layouts.admin')
@section('title','Admin Panel Kategori Sayfası')
@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Haberler</h2>
                    <h5>Bu sayfada haberlerin listesini görmektesin. </h5>

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
                                <th>Haber</th>
                                <th>Keywords</th>
                                <th>Description</th>
                                <th>Görsel</th>
                                <th>Galeri</th>
                                <th>Kategori</th>
                                <th>Kullanıcı</th>
                                <th>Detaylar</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Oluşturma</th>
                                <th>Değiştirme</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->keywords}}</td>
                                <td>{{$rs->description}}</td>
                                <td>@if($rs->image)
                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" height="30">
                                    @endif
                                </td>
                                <td><a onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')" href="{{route('admin_image_add',['news_id'=>$rs->id])}}"><i class="fa fa-file fa-3x"></i></a> </td>
                                <td>{{$rs->category_id}}</td>
                                <td>{{$rs->user_id}}</td>
                                <td>{{$rs->detail}}</td>
                                <td>{{$rs->slug}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->created_at}}</td>
                                <td>{{$rs->updated_at}}</td>
                                <td><a href="{{route('admin_news_edit',['id'=>$rs->id])}}"><button class="btn btn-primary"><i class="fa fa-edit "></i>  Düzenle</button></a>
                                    <a href="{{route('admin_news_delete',['id'=>$rs->id])}}" onclick="return confirm('Silmek istediğinize emnin misiniz?')"><button class="btn btn-danger"><i class="fa fa-eraser"></i> Sil</button></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('admin_news_add')}}" class="btn btn-default">Haber Ekle</a>
                    </div>
                </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
