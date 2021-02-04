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
                <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="col-md-12">
                    <h2>{{$data->title}} Genel Ayarlar</h2>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="col-md-12">

                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                <div class="panel-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#genel" data-toggle="tab">Genel</a>
                        </li>
                        <li class=""><a href="#smtpayari" data-toggle="tab">Smtp Ayarları</a>
                        </li>
                        <li class=""><a href="#sosyalmedya" data-toggle="tab">Sosyal Medya</a>
                        </li>
                        <li class=""><a href="#hakkimizda" data-toggle="tab">Hakkımızda</a>
                        </li>
                        <li class=""><a href="#iletisim" data-toggle="tab">İletişim</a>
                        </li>
                        <li class=""><a href="#referanslar" data-toggle="tab">Referanslar</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="genel">
                            <h4>Genel Ayarlar</h4>
                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                            <div class="form-group">
                                <label>Başlık</label>
                                <input value="{{$data->title}}" id="title" name="title" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Site Logosu</label>
                                <input type="file" name="logo" class="form-control" />
                                @if($data->logo)
                                    <img src="{{ Storage::url($data->logo)}}" height="60">
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input value="{{$data->keywords}}" id="keywords" name="keywords" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input value="{{$data->description}}" id="description" name="description" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Şirket</label>
                                <input value="{{$data->company}}" id="dcompany" name="company" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Adres</label>
                                <input value="{{$data->address}}" id="address" name="address" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Telefon</label>
                                <input value="{{$data->phone}}" id="phone" name="phone" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Fax</label>
                                <input value="{{$data->fax}}" id="fax" name="fax" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>E-posta</label>
                                <input value="{{$data->email}}" id="email" name="email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Durum</label>
                                <select value="{{$data->status}}" class="form-control">
                                    <option>Açık</option>
                                    <option>Kapalı</option>
                                </select>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="smtpayari">
                            <h4>Smtp Ayarları</h4>
                            <div class="form-group">
                                <label>Smtp Server</label>
                                <input value="{{$data->smtpserver}}" id="smtpserver" name="smtpserver" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Smtp Email</label>
                                <input value="{{$data->smtpemail}}" id="smtpemail" name="smtpemail" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Smtp Password</label>
                                <input value="{{$data->smtppassword}}" id="smtppassword" name="smtppassword" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Smtp Port</label>
                                <input value="{{$data->smtpport}}" id="smtpport" name="smtpport" class="form-control" />
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sosyalmedya">
                            <h4>Sosyal Medya</h4>
                            <div class="form-group">
                                <label>Facebook</label>
                                <input value="{{$data->facebook}}" id="facebook" name="facebook" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Twitter</label>
                                <input value="{{$data->twitter}}" id="twitter" name="twitter" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>İnstagram</label>
                                <input value="{{$data->instagram}}" id="instagram" name="instagram" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Youtube</label>
                                <input value="{{$data->youtube}}" id="youtube" name="youtube" class="form-control" />
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hakkimizda">
                            <h4>Hakkımızda</h4>
                            <div class="form-group">
                                <textarea value="{{$data->aboutus}}" id="aboutus" name="aboutus"  >{{$data->aboutus}}</textarea>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="iletisim">
                            <h4>İletişim</h4>
                            <div class="form-group">
                                <textarea value="{{$data->contact}}" id="contact" name="contact"  >{{$data->contact}}</textarea>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="referanslar">
                            <h4>Referanslar</h4>
                            <div class="form-group">
                                <textarea value="{{$data->references}}" id="references" name="references"  >{{$data->references}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $('#aboutus').summernote({
                        tabsize: 2,
                        height: 120,
                        focus: true
                    });
                    $('#contact').summernote({
                        tabsize: 2,
                        height: 120,
                        focus: true
                    });
                    $('#references').summernote({
                        tabsize: 2,
                        height: 120,
                        focus: true
                    });
                </script>
                <button class="btn btn-default"><i class=" fa fa-refresh "></i> Kaydet</button>

            </form>
            </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
