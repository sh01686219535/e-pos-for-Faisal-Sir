@foreach($subcategory as $sub)
<option value="{{$sub->id}}">{{$parent}} -> {{$sub->category_name ?? ''}}</option>
@if(count($item->childrenRecursive) > 0)
@php
$parents = $parent.'->'.$sub->category_name;
@endphp
@include('backend.category.subCategory',['subcategory' => $sub->childrenRecursive, 'parent'=> $parents ??
''])
@endif
@endforeach