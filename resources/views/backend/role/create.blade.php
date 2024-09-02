@extends('backend.dashboard.master')
@section('title')
    Create Role
@endsection
@section('content')
<div id="content" class="app-content p-3">
    <div class="head-main d-flex justify-content-between my-3">
        <h3>Role Create</h3>
        <a href="{{route('module.index')}}" class="btn btn-info "><i class="fas fa-list"></i> Role List</a>
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
                <form action="{{route('role.store')}}" method="post">
                   @csrf
                    <div class="mb-3 row">
                        <label for="roleName" class="col-sm-2 col-form-label">Role Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="roleName" name="roleName">
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
