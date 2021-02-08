@extends('layouts.admin')
@section('title','Admin Panel Kategori Sayfası')
@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Sıkça Sorulan Sorular</h2>
                    <h5>Bu sayfada Sıkça Sorulan Sorularin listesini görmektesin. </h5>
                    @include('home.message')
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
                                <th>Soru</th>
                                <th>Cevap</th>
                                <th>Öncelik</th>
                                <th>Durum</th>
                                <th>Oluşturma</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->question}}</td>
                                <td>{!! $rs->answer !!}</td>
                                <td>{{$rs->position}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->created_at}}</td>
                                <td><a href="{{route('admin_faq_edit',['id'=>$rs->id])}}"><button class="btn btn-primary"><i class="fa fa-edit "></i>  Düzenle</button></a>
                                    <a href="{{route('admin_faq_delete',['id'=>$rs->id])}}" onclick="return confirm('Silmek istediğinize emnin misiniz?')"><button class="btn btn-danger"><i class="fa fa-eraser"></i> Sil</button></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('admin_faq_add')}}" class="btn btn-default">Soru ekle</a>
                    </div>
                </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
