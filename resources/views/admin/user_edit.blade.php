@extends('layouts.admin')
@section('title','Admin Paneli')
@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Kullanıcı Düzenleme</h2>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="col-md-12">
                <form role="form" action="{{route('admin_user_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>İsim</label>
                        <input value="{{$data->name}}" id="name" name="name" class="form-control" />
                        <p class="help-block">Kullanıcı ismi.</p>
                    </div>
                    <div class="form-group">
                        <label>E-posta adresi</label>
                        <input value="{{$data->email}}" id="email" name="email" class="form-control" />
                        <p class="help-block">Kullanıcı e-posta adresi.</p>
                    </div>
                    <div class="form-group">
                        <label>Telefon</label>
                        <input value="{{$data->phone}}" id="phone" name="keywords" class="form-control" />
                        <p class="help-block">Kullanıcı telefon numarası.</p>
                    </div>
                    <div class="form-group">
                        <label>Adres</label>
                        <input value="{{$data->address}}" id="address" name="address" class="form-control" />
                        <p class="help-block">Kullanıcı adresi.</p>
                    </div>
                    <div class="form-group">
                        <label>Kullanıcı profil resmi</label>
                        <input type="file" name="image" class="form-control" />
                        @if($data->profile_photo_path)
                            <img src="{{ Storage::url($data->profile_photo_path)}}" height="150px">
                        @endif
                    </div>
                    <button class="btn btn-default"><i class=" fa fa-refresh "></i> Güncelle</button>

                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>

@endsection
