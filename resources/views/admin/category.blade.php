@extends('layouts.admin')
@section('title','Admin Panel Kategori Sayfası')
@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Kategoriler</h2>
                    <h5>Bu sayfada kategorilerin listesini görmektesin. </h5>

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
                                <th>Ana Kategori</th>
                                <th>Kategori Başlık</th>
                                <th>Keywords</th>
                                <th>Description</th>
                                <th>Image</th>
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
                                <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</td>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->keywords}}</td>
                                <td>{{$rs->description}}</td>
                                <td>{{$rs->image}}</td>
                                <td>{{$rs->slug}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->created_at}}</td>
                                <td>{{$rs->updated_at}}</td>
                                <td><a href="{{route('admin_category_edit',['id'=>$rs->id])}}"><button class="btn btn-primary"><i class="fa fa-edit "></i>  Düzenle</button></a>
                                    <a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Silmek istediğinize emnin misiniz?')"><button class="btn btn-danger"><i class="fa fa-pencil"></i>Sil</button></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('admin_category_add')}}" class="btn btn-default">Kategori Ekle</a>
                    </div>
                </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
