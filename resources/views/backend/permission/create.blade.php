@extends('backend.dashboard.master')
@section('title')
    Create Permission
@endsection
@section('content')
    <div id="content" class="app-content p-3">
        <div class="head-main d-flex justify-content-between my-3">
            <h3>Permission Create</h3>
            <a href="{{ route('permission.index') }}" class="btn btn-info "><i class="fas fa-list"></i>Permission List</a>
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
                <form action="{{ route('permission.store') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="module_id" class="col-sm-2 col-form-label">Module Name</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="module_id" name="module_id">
                                <option selected>Select Module</option>
                                @foreach ($module as $item)
                                    <option value="{{ $item->id }}">{{ $item->module_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="sub_module_id" class="col-sm-2 col-form-label">Sub Module Name</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="sub_module_id" name="sub_module_id">
                                <option selected>Select Sub Module</option>

                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="permission" class="col-sm-2 col-form-label">Permission</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="permission" name="permission">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#module_id').on('change',function(){
                var moduleId = $(this).val();
                $.ajax({
                    url:"/get-sub_module",
                    data:{moduleId:moduleId},
                    type:'GET',
                    dataType:'json',
                    success:function(data){
                        $('#sub_module_id').html(data);
                    },
                    error:function(error,xhr,status){
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endpush
