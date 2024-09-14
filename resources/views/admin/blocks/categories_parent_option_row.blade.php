@php /** @var \App\Models\Shop\Category $category @if(request()->get('parent_id') == $category->id) selected @endif*/ @endphp

<option @if( @$item->parent_id == $category->id) selected @endif
        value="{{ $category->id }}"
>
    {{$padding ?? ''}}{{ $category->name  }} 
</option>

@if($category->children->count())
    @php $padding .= '|__ '; @endphp
    @foreach($category->children as $subCategory)
        @include('admin.blocks.categories_parent_option_row', ['category' => $subCategory, 'padding' => $padding])
    @endforeach
@endif