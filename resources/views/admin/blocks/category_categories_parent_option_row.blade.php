@php /** @var \App\Models\Shop\Category $category @if(request()->get('parent_id') == $category->id) selected @endif*/ @endphp

@dd(@$category , $category_item);
<option @if( @$category->parent_id == $category_item->id) selected @endif
        value="{{ $category_item->id }}"
>
    {{$padding ?? ''}}{{ $category_item->name  }}
</option>

@if($category_item->children->count())
    @php $padding .= '|__ '; @endphp
    @foreach($category_item->children as $subCategory)
        @include('admin.blocks.category_categories_parent_option_row', ['category_item' => $subCategory, 'padding' => $padding])
    @endforeach
@endif
