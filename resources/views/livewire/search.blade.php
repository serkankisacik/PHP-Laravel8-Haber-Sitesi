<div>
    <input wire:model="search" name="search" type="text" class="form-control" list="mylist" placeholder="Birşeyler yaz" />

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category_id}}</option>
            @endforeach
        </datalist>
    @endif
</div>
