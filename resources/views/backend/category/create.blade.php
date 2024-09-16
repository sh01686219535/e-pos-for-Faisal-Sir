@extends('backend.dashboard.master')
@section('title')
Create Category
@endsection
@section('content')
<div id="content" class="app-content p-3">
    <div class="head-main d-flex justify-content-between my-3">
        <h3>Category Create</h3>
        <a href="{{ route('subModule.index') }}" class="btn btn-info "><i class="fas fa-list"></i>Category List</a>
    </div>
    <div class="card">
        <div class="card-header with-btn">
            <div class="card-header-btn">
                <a href="#" data-toggle="card-collapse" class="btn">
                    <iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon>
                </a>
                <a href="#" data-toggle="card-expand" class="btn">
                    <iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon>
                </a>
                <a href="#" data-toggle="card-remove" class="btn">
                    <iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon>
                </a>
            </div>
        </div>
        <div class="card-body">
            @include('error')
            <form action="{{ route('category.store') }}" method="post" id="brandForm">
                @csrf
                <div class="mb-3 row">
                    <label for="categoryName" class="col-sm-2 col-form-label">Category Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="categoryName" name="categoryName">
                        <span class="text-danger" id="categoryNameError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="parent_id" class="col-sm-2 col-form-label">Category Select</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="parent_id" name="parent_id">
                            <option selected>Select Category</option>
                            <!-- @foreach ($module as $item)
                                <option value="{{$item->id}}">{{$item->moduleName}}</option>
                                @endforeach -->
                        </select>
                    </div>
                </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-outline-theme">Submit</button>
            </div>
        </div>
        </form>
    </div>
    <div class="hljs-container">
        <pre><code class="xml" data-url="assets/data/form-elements/code-11.json"></code></pre>
    </div>
</div>
</div>
@endsection
@push('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
//form Validation
@include('backend.validation.category')
</script>
@endpush