@extends('layouts.admin')
@section('title','Admin Paneli')
@section('javascript')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection
@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Soru Düzenleme</h2>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="col-md-12">
            <form role="form" action="{{route('admin_faq_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Sırası</label>
                    <input type="number" value="{{$data->position}}" id="position" name="position" class="form-control" />
                    <p class="help-block">Sorunun görüntülenecek sırası</p>
                </div>
                <div class="form-group">
                    <label>Soru</label>
                    <input value="{{$data->question}}" id="question" name="question" class="form-control" />
                    <p class="help-block">Sorunuz</p>
                </div>
                <div class="form-group">
                    <label>Cevap</label>
                    <textarea id="answer" name="answer">{{$data->answer}}</textarea>
                    <script>
                        CKEDITOR.replace( 'answer' );
                    </script>
                    <p class="help-block">Sorunuzun açıklaması.</p>
                </div>
                <div class="form-group">
                    <label>Durum</label>
                    <select name="status" class="form-control">
                        <option selected="selected">{{$data->status}}</option>
                        <option>True</option>
                        <option>False</option>
                    </select>
                </div>
                <button type="submit" class="btn-sm"> <i class="fa fa-recycle fa-3x"></i> Güncelle</button>

            </form>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
