@extends('backend.dashboard.master')
@section('title')
Update Brand
@endsection
@section('content')
<div id="content" class="app-content p-3">
    <div class="head-main d-flex justify-content-between my-3">
        <h3>Brand Create</h3>
        <a href="{{ route('brand.index') }}" class="btn btn-info "><i class="fas fa-list"></i> Brand List</a>
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
            <form action="{{ route('brand.update',$brand->id) }}" method="post" id="brandForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="brand_name" class="col-sm-2 col-form-label">Brand Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{$brand->brand_name}}">
                        <span class="text-danger" id="brandNameError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="status" name="status">
                            <option value="active"{{$brand->status =='active' ? 'selected' : ''}}>Active</option>
                            <option value="inActive"{{$brand->status =='inActive' ? 'selected' : ''}}>Inactive</option>
                        </select>
                    </div>
                    <span class="text-danger" id="statusError"></span>
                </div>
                <div class="mb-3 row">
                    <label for="brand_image" class="col-sm-2 col-form-label">Brand Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="brand_image" name="brand_image">
                        @if($brand->brand_image)
                        <img src="{{asset($brand->brand_image)}}" alt="" class="image-style rounded-circle my-3 img-height" id="showImage">
                        @else
                        <img id="showImage"
                            src="{{ asset('backendAsset/assets/img/previewImage.png') }}" alt=""
                            class="image-style rounded-circle my-3 img-height">
                        @endif
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
//Brand Image
$('#brand_image').change('click', function(e) {
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#showImage').attr('src', e.target.result);
        const imageData = e.target.result;
        localStorage.setItem('imageData', imageData);
    }
    reader.readAsDataURL(e.target.files['0']);
});
//form Validation
@include('backend.validation.brand')
</script>
@endpush