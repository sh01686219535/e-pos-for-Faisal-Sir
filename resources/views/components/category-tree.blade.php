@props(['categories'])

<ul>
    @foreach($categories as $item)
        <li>
            <div class="d-flex align-items-center">
                @if($item->children->isNotEmpty())
                    <button class="btn btn-link plus-icon" data-target="subcategories-{{$item->id}}">
                        <i class="fas fa-plus"></i>
                    </button>
                @endif
                <span class="category-name">{{$item->category_name}}</span>
            </div>
            @if($item->children->isNotEmpty())
                <div id="subcategories-{{$item->id}}" class="subcategories" style="display:none; margin-left: 20px;">
                    <x-category-tree :categories="$item->children" />
                </div>
            @endif
        </li>
    @endforeach
</ul>
