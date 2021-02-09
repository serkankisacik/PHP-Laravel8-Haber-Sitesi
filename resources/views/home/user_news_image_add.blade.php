    <html>
    <head>
        <title>{{$data->title}} Haberine Galeri Ekleme</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="{{asset('assetsdash')}}/css/bootstrap.css" rel="stylesheet"/>
        <!-- FONTAWESOME STYLES-->
        <link href="{{asset('assetsdash')}}/css/font-awesome.css" rel="stylesheet"/>
        <!-- MORRIS CHART STYLES-->
        <link href="{{asset('assetsdash')}}/js/morris/morris-0.4.3.min.css" rel="stylesheet"/>
        <!-- CUSTOM STYLES-->
        <link href="{{asset('assetsdash')}}/css/custom.css" rel="stylesheet"/>
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    </head>
    <body>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2><b>{{$data->title}}</b></h2><h3>Haberine Galeri Ekleme</h3>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="col-md-6">
                <form role="form" action="{{route('user_image_store', ['news_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Başlık</label>
                        <input id="title" name="title" class="form-control" />
                        <p class="help-block">Galerinin görünmesini istediğiniz başlık.</p>
                    </div>
                    <div class="form-group">
                        <label>alt</label>
                        <input id="alt" name="alt" class="form-control" />
                        <p class="help-block">Görselin üzerine geldiğinizde görünmesini istediğiniz açıklama metni.</p>
                    </div>
                    <div class="form-group">
                        <label>Galeri kapak görseli</label>
                        <input type="file" name="image" class="form-control" />
                    </div>
                    <button type="submit" class="btn btn-default">Galerii ekle</button>

                </form>
            </div>
            <div class="col-md-6">
                <h2> Diğer Görseller </h2>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Görsel Başlığı</th>
                                <th>Görsel</th>
                                <th>Alt</th>
                                <th>Düzenle</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>@if($rs->image)
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" height="50">
                                        @endif
                                    </td>
                                    <td>{{$rs->alt}}</td>
                                    <td><a href="{{route('admin_user_delete',['id'=>$rs->id,'news_id'=>$rs->news_id])}}" onclick="return confirm('Silmek istediğinize emnin misiniz?')">
                                            <button class="btn btn-danger"><i class="fa fa-eraser"></i>Sil</button></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>


