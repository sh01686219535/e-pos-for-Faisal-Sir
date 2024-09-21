@extends('backend.dashboard.master')
@section('title')
Create Color
@endsection
@section('content')
<div id="content" class="app-content p-3">
    <div class="head-main d-flex justify-content-between my-3">
        <h3>Color Create</h3>
        <a href="{{ route('color.index') }}" class="btn btn-info "><i class="fas fa-list"></i> Color List</a>
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
            <form action="{{ route('color.store') }}" method="post" id="brandForm">
                @csrf
                <div class="mb-3 row">
                    <label for="color_name" class="col-sm-2 col-form-label">Color Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="color_name" name="color_name">
                        <span class="text-danger" id="colorNameError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="color_code" class="col-sm-2 col-form-label">Color Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="color_code" name="color_code">
                        <span class="text-danger" id="colorCodeError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="status" name="status">
                            <option value="active">Active</option>
                            <option value="inActive">Inactive</option>
                        </select>
                    </div>
                    <span class="text-danger" id="statusError"></span>
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
@include('backend.validation.color')
</script>
@endpush