@foreach($subcategory as $sub)
<option value="{{$sub->id}}">{{$parent}} -> {{$sub->categoryName ?? ''}}</option>
@if(count($item->childrenRecursive) > 0)
@php
$parents = $parent.'->'.$sub->categoryName;
@endphp
@include('backend.category.subCategory',['subcategory' => $sub->childrenRecursive, 'parent'=> $parents ??
''])
@endif
@endforeach