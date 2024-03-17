@foreach($categories as $category)
    <ul>
        <li>{{ $category->name }}</li>
        @if(count($category->children))
            @include('manageChild',['children' => $category->children])
        @endif
    </ul>
@endforeach

<form method="POST" action="{{ route('categories.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Category Name:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="parent_id">Parent Category:</label>
        <select name="parent_id" id="parent_id" class="form-control">
            <option value="">None</option>
            @foreach($categoryList as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add Category</button>
</form>