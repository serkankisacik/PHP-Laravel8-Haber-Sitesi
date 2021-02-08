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
                    <h2>Sık Sorulan Soru Ekleme</h2>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="col-md-6">
                <form role="form" action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Sırası</label>
                        <input type="number" id="position" name="position" class="form-control" />
                        <p class="help-block">Sorunun görüntülenecek sırası</p>
                    </div>
                    <div class="form-group">
                        <label>Soru</label>
                        <input id="question" name="question" class="form-control" />
                        <p class="help-block">Sorunuz</p>
                    </div>
                    <div class="form-group">
                        <label>Cevap</label>
                        <textarea id="answer" name="answer"></textarea>
                        <script>
                            CKEDITOR.replace( 'answer' );
                        </script>
                        <p class="help-block">Sorunuzun açıklaması.</p>
                    </div>
                    <div class="form-group">
                        <label>Durum</label>
                        <select name="status" class="form-control">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Soruyu ekle</button>

                </form>
            </div>
            <div class="col-md-6">
                <h2> En son sorular </h2>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Soru</th>
                                <th>Durum</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->question}}</td>
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
