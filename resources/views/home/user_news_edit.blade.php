@extends('layouts.main')

@section('title', $setting->title )
@section('pagetitle', "Kullanıcı Profili")
@section('keywords', $setting->keywords)
@section('css')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection
@section('content')
    <section id="category_section" class="category_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="page-wrapper" >
                        <div id="page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Haber Düzenleme</h2>

                                </div>
                            </div>
                            <!-- /. ROW  -->
                            <hr />
                            <div class="col-md-9">
                                <form role="form" action="{{route('user_news_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Başlık</label>
                                        <input value="{{$data->title}}" id="title" name="title" class="form-control" />
                                        <p class="help-block">Haberin görünmesini istediğiniz başlık.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}"@if ($rs->id==$data->category_id) selected="selected" @endif> {{$rs->title}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Haber</label>
                                        <textarea id="news" name="news"  >{{$data->detail}}</textarea>
                                        <script>
                                            CKEDITOR.replace( 'news' );
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
                                        <select value="status" id="status" name="slug" class="form-control">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Haber kapak görseli</label>
                                        <input type="file" name="image" class="form-control" />
                                        @if($data->image)
                                            <img src="{{ Storage::url($data->image)}}" height="150">
                                        @endif
                                    </div>
                                    <button class="btn btn-default"><i class=" fa fa-refresh "></i> Kaydet</button>

                                </form>
                            </div>
                            <!-- /. PAGE INNER  -->
                            <div class="col-md-3">
                                @include('home.usermenu')
                            </div>
                        </div>

                    </div>
                <!-- Left Section -->


                <!-- Right Section -->
            </div>
            <!-- Row -->
        </div>
        <!-- Container -->
    </section>
    <!-- Category News Section -->
@endsection

