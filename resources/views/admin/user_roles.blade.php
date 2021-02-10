<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Kullanıcı Rolleri</h3>
            </div>
        </div>
        <div class="panel-body">
            @include('home.message')
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>@if($data->profile_photo_path)
                                <img src="{{ Storage::url($data->profile_photo_path)}}" height="150px">
                            @endif</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>Sıra</th>
                        <th>{{$data->id}}</th>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <th>E-posta</th>
                        <th>{{$data->email}}</th>
                    </tr>
                    <tr>
                        <th>İsim</th>
                        <td>{{$data->name}}</td>

                    </tr>
                    <tr>
                        @foreach($data->roles as $row)
                        <tr>
                            <th>{{$row->name}}</th>
                            <td><a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Silinecek ! Emin Misiniz?')">Sil</a></td>
                        </tr>
                        @endforeach


                    <tr>
                    <th>Yetki ekle</th>
                    <td>
                    <form role="form" action="{{route('admin_user_role_add', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <select name="roleid">
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}">{{$rs-> name}}</option>
                            @endforeach
                        </select>
                        <button type="submit">Yetkiyi ekle</button>
                    </form>
                    </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
