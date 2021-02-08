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
                    <h2>Yorum Düzenleme</h2>
                    @include('home.message')

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="col-md-6">
            <form role="form" action="{{route('admin_review_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Konu</label>
                    <input value="{{$data->subject}}" id="slug" name="slug" class="form-control" />
                    <p class="help-block">Konu metni.</p>
                </div>

                <div class="form-group">
                    <label>Yorum</label>
                    <textarea value="{{$data->review}}" id="summernote" name="detail"  >{{$data->review}}</textarea>
                    <script>
                        $('#summernote').summernote({
                            tabsize: 2,
                            height: 120,
                            focus: true
                        });
                    </script>
                    <p class="help-block">Yorumun açıklaması.</p>
                </div>
                <div class="form-group">
                <label>Derecelendirme</label>
                <input value="{{$data->rate}}" id="slug" name="slug" class="form-control" />
                <p class="help-block">Yıldız Derecelendirmesi.</p>
                </div>
                <div class="form-group">
                    <label>Keywords</label>
                    <input value="{{$data->user->name}}" id="keywords" name="keywords" class="form-control" />
                    <p class="help-block">Yorumu yazan kişi</p>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input value="{{$data->news->title}}" id="description" name="description" class="form-control" />
                    <p class="help-block">Yorumun hangi habere yazıldığı</p>
                </div>
                <div class="form-group">
                    <label>Durum</label>
                    <select name="status" class="form-control">s
                        <option>{{$data->status}}</option>
                        <option>Old</option>
                        <option>New</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>IP Adresi</label>
                    <input value="{{$data->ip}}" id="slug" name="slug" class="form-control" />
                    <p class="help-block">ip adresi.</p>
                </div>
                <div class="form-group">
                    <label>Oluşturma</label>
                    <input value="{{$data->created_at}}" id="slug" name="slug" class="form-control" />
                    <p class="help-block">Yorumun ne zaman yazıldığı</p>
                </div>
                <button class="btn btn-default"><i class=" fa fa-refresh "></i> Kaydet</button>

            </form>
            </div>
            <div class="col-md-6">
                <h2> En son Yorumler </h2>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Yorum</th>
                                <th>Kısayol</th>
                                <th>Durum</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>o</td>
                                    <td>o</td>
                                    <td>p</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
