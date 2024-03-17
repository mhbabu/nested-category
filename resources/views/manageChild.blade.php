@foreach($children as $child)
    <ul>
        <li>{{ $child->name }}</li>
        @if(count($child->children))
            @include('manageChild',['children' => $child->children])
        @endif
    </ul>
@endforeach