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
                        <th>İsim</th>
                        <td>{{$data->name}}</td>
                    </tr>
                    <tr>
                        <th>E-posta</th>
                        <th>{{$data->email}}</th>
                    </tr>
                    <tr>
                        <th>Telefon</th>
                        <th>{{$data->phone}}</th>
                    </tr>
                    <tr>
                        <th>Adres</th>
                        <th>{{$data->address}}</th>
                    </tr>
                    <tr>
                        @foreach($data->roles as $row)
                        <tr>
                            <th>Yetki {{$row}}</th>
                            <td>{{$row->name}}</td>
                        </tr>
                        @endforeach

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
