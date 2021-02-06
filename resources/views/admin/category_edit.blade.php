@extends('layouts.admin')
@section('title','Admin Paneli')
@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Kategori Düzenleme</h2>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="col-md-6">
            <form role="form" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Kategori adı</label>
                    <input id="title" name="title" value="{{$data->title}}" class="form-control" />
                    <p class="help-block">Kategorinin görünmesini istediğiniz başlık.</p>
                </div>
                <div class="form-group">
                    <label>Ana Kategori</label>
                    <select name="parent_id" class="form-control">
                        @foreach($datalist as $rs)
                        <option value="{{$rs->id}}" @if ($rs->id==$data->parent_id) selected="selected" @endif> {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Keywords</label>
                    <input value="{{$data->keywords}}" id="keywords" name="keywords" class="form-control" />
                    <p class="help-block">Kategorinin arama motorlarında görünmesini istediğiniz anahtar kelimeler.</p>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input value="{{$data->description}}" id="description" name="description" class="form-control" />
                    <p class="help-block">Kategorinin arama motorlarında görünmesini istediğiniz açıklama metni.</p>
                </div>
                <div class="form-group">
                    <label>Kategori kapak görseli</label>
                    <input type="file" name="image" class="form-control" />
                    @if($data->image)
                        <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" height="150">
                    @endif
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input value="{{$data->slug}}" id="slug" name="slug" class="form-control" />
                    <p class="help-block">Slug metni.</p>
                </div>
                <div class="form-group">
                    <label>Durum</label>
                    <select class="form-control">
                        <option selected="{{$data->status}}">Açık</option>
                        <option>Açık</option>
                        <option>Kapalı</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">Değişiklikleri kaydet</button>

            </form>
            </div>
            <div class="col-md-6">
                <h2>Mevcut olan Ana kategoriler </h2>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Kategori</th>
                                <th>Kısayol</th>
                                <th>Durum</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->slug}}</td>
                                    <td>{{$rs->status}}</td>
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
