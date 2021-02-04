@foreach($children as $subcategory)

    <ul class="col-sm-3">
        <li class="dropdown-header">
            @if(count($subcategory->children))
                <a href="#">{{$subcategory->title}}</a>
            @else
                <a href="#">{{$subcategory->title}}</a>
            @endif
        </li>
    </ul>
@endforeach
