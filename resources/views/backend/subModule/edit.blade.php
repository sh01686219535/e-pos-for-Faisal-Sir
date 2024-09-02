@extends('backend.dashboard.master')
@section('title')
    Update Sub Module
@endsection
@section('content')
    <div id="content" class="app-content p-3">
        <div class="head-main d-flex justify-content-between my-3">
            <h3>Sub Module Update</h3>
            <a href="{{ route('subModule.index') }}" class="btn btn-info "><i class="fas fa-list"></i>Sub Module List</a>
        </div>
        <div class="card">
            <div class="card-header with-btn">
                <div class="card-header-btn">
                    <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon
                            icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                    <a href="#" data-toggle="card-expand" class="btn"><iconify-icon
                            icon="material-symbols-light:fullscreen"></iconify-icon></a>
                    <a href="#" data-toggle="card-remove" class="btn"><iconify-icon
                            icon="material-symbols-light:close-rounded"></iconify-icon></a>
                </div>
            </div>
            <div class="card-body">
                @include('error')
                <form action="{{ route('subModule.update',$subModule->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 row">
                        <label for="module_id" class="col-sm-2 col-form-label">Module Name</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="module_id" name="module_id">
                                <option selected>Select Module</option>
                                @foreach ($module as $item)
                                <option value="{{$item->id}}" {{$subModule->module_id == $item->id ? 'selected' : ''}}>{{$item->moduleName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="subModuleName" class="col-sm-2 col-form-label">Sub Module Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="subModuleName" value="{{$subModule->subModuleName}}" name="subModuleName">
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
