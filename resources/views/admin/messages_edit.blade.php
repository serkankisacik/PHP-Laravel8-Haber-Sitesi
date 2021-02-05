@extends('layouts.admin')
@section('title','İletişim Formları')
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
                    <h2>İletişim formu mesajları</h2>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="col-md-12">
                @include('home.message')
            <form role="form" action="{{route('admin_message_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>İsim</label>
                    <input value="{{$data->name}}" id="title" name="title" class="form-control" />
                    <p class="help-block">Gönderen kişinin ismi.</p>
                </div>
                <div class="form-group">
                    <label>Admin notu</label>
                    <input value="{{$data->note}}" id="note" name="note" class="form-control" />
                    <p class="help-block">Admin notu</p>
                </div>
                <div class="form-group">
                    <label>Konu</label>
                    <input value="{{$data->subject}}" id="subject" name="subject" class="form-control" />
                    <p class="help-block">Mesajın konusu.</p>
                </div>
                <div class="form-group">
                    <label>Haber</label>
                    <textarea value="{{$data->message}}" id="summernote" name="message"  >{{$data->message}}</textarea>
                    <script>
                        $('#summernote').summernote({
                            tabsize: 2,
                            height: 120,
                            focus: true
                        });
                    </script>
                    <p class="help-block">İleti gövdesi.</p>
                </div>
                <div class="form-group">
                    <label>E-posta</label>
                    <input value="{{$data->email}}" id="email" name="email" class="form-control" />
                    <p class="help-block">Gönderen kişinin e-posta adresi</p>
                </div>
                <div class="form-group">
                    <label>Telefon numarası</label>
                    <input value="{{$data->phone}}" id="phone" name="phone" class="form-control" />
                    <p class="help-block">Gönderen kişinin telefon numarası.</p>
                </div>
                <div class="form-group">
                    <label>IP Adresi</label>
                    <input value="{{$data->ip}}" id="ip" name="ip" class="form-control" />
                    <p class="help-block">Gönderen kişinin ip numarası.</p>
                </div>
                <div class="form-group">
                    <label>Durum</label>
                    <select value="{{$data->status}}" class="form-control">
                        <option>Okundu</option>
                        <option>Okunmamış</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Ek dosya</label>
                    <input type="file" name="image" class="form-control" />
                    @if($data->file)
                        <img src="{{ Storage::url($data->file)}}" height="150">
                    @endif
                </div>
                <button class="btn btn-default"><i class=" fa fa-refresh "></i> Kaydet</button>

            </form>
            </div>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
