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
                <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Haber Ekleme</h2>

                                </div>
                            </div>
                            <!-- /. ROW  -->
                            <hr />
                            <div class="col-md-12">
                                <form role="form" action="{{route('user_news_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Başlık</label>
                                        <input id="title" name="title" class="form-control" />
                                        <p class="help-block">Haberin görünmesini istediğiniz başlık.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}"> {{$rs->title}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Haber</label>
                                        <textarea id="news" name="news"  ></textarea>
                                        <script>
                                            CKEDITOR.replace( 'news' );
                                        </script>
                                        <p class="help-block">Haberin açıklaması.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input id="keywords" name="keywords" class="form-control" />
                                        <p class="help-block">Haberin arama motorlarında görünmesini istediğiniz anahtar kelimeler.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input id="description" name="description" class="form-control" />
                                        <p class="help-block">Haberin arama motorlarında görünmesini istediğiniz açıklama metni.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input id="slug" name="slug" class="form-control" />
                                        <p class="help-block">Slug metni.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Haber kapak görseli</label>
                                        <input type="file" name="image" class="form-control" />
                                    </div>
                                    <button type="submit" class="btn btn-default">Haberi ekle</button>

                                </form>
                            </div>
                </div>
                <div class="col-md-3">
                    @include('home.usermenu')
                </div>
                <!-- Right Section -->
            </div>
            <!-- Row -->
        </div>
        <!-- Container -->
    </section>
    <!-- Category News Section -->
@endsection

