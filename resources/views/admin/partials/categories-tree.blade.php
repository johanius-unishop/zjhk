@foreach ($categories as $category)
    <option value="{{ $category->id }}"
            @if ($category->id == $parentCategory->id) selected @endif>
        {!! str_repeat('- ', $category->depth) !!}{{ $category->name }}
    </option>
    @if (!empty($category->children))
        @include('admin.partials.categories-tree', ['categories' => $category->children, 'parentCategory' => $parentCategory])
    @endif
@endforeach