@extends('layouts.admin')
@section('title','Admin Paneli')
@section('javascript')
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Haber Düzenleme</h2>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="col-md-6">
            <form role="form" action="{{route('admin_news_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Başlık</label>
                    <input value="{{$data->title}}" id="title" name="title" class="form-control" />
                    <p class="help-block">Haberin görünmesini istediğiniz başlık.</p>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="parent_id" id="parent_id" class="form-control">
                        @foreach($datalist as $rs)
                            <option value="{{$rs->id}}"@if ($rs->id==$data->category_id) selected="selected" @endif> {{$rs->title}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Haber</label>
                    <textarea value="{{$data->detail}}" id="summernote" name="detail"  >{{$data->detail}}</textarea>
                    <script>
                        $('#summernote').summernote({
                            tabsize: 2,
                            height: 120,
                            focus: true
                        });
                    </script>
                    <p class="help-block">Haberin açıklaması.</p>
                </div>
                <div class="form-group">
                    <label>Keywords</label>
                    <input value="{{$data->keywords}}" id="keywords" name="keywords" class="form-control" />
                    <p class="help-block">Haberin arama motorlarında görünmesini istediğiniz anahtar kelimeler.</p>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input value="{{$data->description}}" id="description" name="description" class="form-control" />
                    <p class="help-block">Haberin arama motorlarında görünmesini istediğiniz açıklama metni.</p>
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input value="{{$data->slug}}" id="slug" name="slug" class="form-control" />
                    <p class="help-block">Slug metni.</p>
                </div>
                <div class="form-group">
                    <label>Durum</label>
                    <select value="{{$data->status}}" class="form-control">
                        <option>Açık</option>
                        <option>Kapalı</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Haber kapak görseli</label>
                    <input type="file" name="image" value="{{$data->image}}" class="form-control" />
                    @if($data->image)
                        <img src="{{ Storage::url($data->image)}}" height="60">
                    @endif
                </div>
                <button class="btn btn-default"><i class=" fa fa-refresh "></i> Kaydet</button>

            </form>
            </div>
            <div class="col-md-6">
                <h2> En son haberler </h2>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Haber</th>
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
