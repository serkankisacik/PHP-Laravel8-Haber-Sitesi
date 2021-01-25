@foreach($children as $subcategory)
    <ul class="col-sm-3">
        @if(count($subcategory->children))

                    <li><a href="#">{{$subcategory->title}}</a></li>

        @else
            <li><a href="#">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
