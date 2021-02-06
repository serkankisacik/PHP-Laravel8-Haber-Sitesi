@foreach($children as $subcategory)
    <ul class="col-sm-3">
        @if(count($subcategory->children))
            <li><a href="#">{{$subcategory->title}}</a></li>
            <ul>
                @include('home.categorytree', ['children'=>$rs->children])
            </ul>
        @else
            <li><a href="#">{{$subcategory->title}} {{$subcategory->id}} </a></li>
        @endif
    </ul>
@endforeach
