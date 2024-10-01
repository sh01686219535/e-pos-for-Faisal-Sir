@extends('backend.dashboard.master')
@section('title')
Create Item
@endsection
@section('content')
<div id="content" class="app-content p-3">
    <div class="head-main d-flex justify-content-between my-3">
        <h3>Supplier Create</h3>
        <a href="{{ route('item_info.index') }}" class="btn btn-info "><i class="fas fa-list"></i> Item</a>
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
        <div class="card-body p-4">
            @include('error')
            <form action="{{ route('item_info.store') }}" method="post" id="brandForm" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="category_id" class=" col-form-label">Category</label>
                        <div>
                            <select class="form-control" id="category_id" name="category_id">
                                <option value="">Select Category</option>
                                @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->category_name ?? ''}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="categoryError"></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="sub_category_id" class="col-form-label">Sub Category</label>
                        <div>
                            <select class="form-control" id="sub_category_id" name="sub_category_id">
                                <option value="">Select Sub Category</option>
                              
                            </select>
                            <span class="text-danger" id="sub_categoryError"></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="brand_id" class="col-form-label">Brand</label>
                        <div>
                            <select class="form-control" id="brand_id" name="brand_id">
                                <option value="">Select Brand</option>
                                @foreach($brand as $brands)
                                <option value="{{ $brands->id}}">{{ $brands->brand_name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="brandError"></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="color_id" class=" col-form-label">Color</label>
                        <div>
                            <select class="form-control" id="color_id" name="color_id">
                                <option value="">Select Color</option>
                                @foreach($color as $colors)
                                <option value="{{ $colors->id}}">{{ $colors->color_name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="colorError"></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="size_id" class="col-form-label">Size</label>
                        <div>
                            <select class="form-control" id="size_id" name="size_id">
                                <option value="">Select Size</option>
                                @foreach($size as $items)
                                <option value="{{ $items->id}}">{{ $items->size_name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="sizeError"></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="name" class="col-form-label">Name</label>
                        <div>
                            <input type="text" class="form-control" id="name" name="name">
                            <span class="text-danger" id="nameError"></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="code" class="col-form-label">Code</label>
                        <div>
                            <input type="text" class="form-control" id="code" name="code">
                            <span class="text-danger" id="codeError"></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="supplier_id" class=" col-form-label">Supplier</label>
                        <div>
                            <select class="form-control" id="supplier_id" name="supplier_id">
                                <option value="">Select Supplier</option>
                                @foreach($supplier as $suppliers)
                                <option value="{{ $suppliers->id}}">{{ $suppliers->supplier_name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="supplierError"></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="description" class="col-form-label">Description</label>
                        <div>
                            <textarea type="text" class="form-control" id="description" name="description"></textarea>
                            <span class="text-danger" id="descriptionError"></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="image" class=" col-form-label">Single Image</label>
                        <div>
                            <input type="file" class="form-control" id="image" name="image">
                            <img id="showImage1" src="{{ asset('backendAsset/assets/img/previewImage.png') }}" alt="" class="image-style rounded-circle my-3 img-height">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="multiple_image" class=" col-form-label">multiple Image</label>
                        <div>
                            <input type="file" class="form-control" id="multiple_image" name="multiple_image[]" multiple>
                            <img id="showImage2" src="{{ asset('backendAsset/assets/img/previewImage.png') }}" alt="" class="image-style rounded-circle my-3 img-height">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mt-3">
                        <label for="description" class="col-form-label"></label>
                        <div class="text-start">
                            <button type="submit" class="btn btn-outline-theme px-5 py-3 display-3">Submit</button>
                        </div>
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
    //Single Image
    $('#image').change('click', function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage1').attr('src', e.target.result);
            const imageData = e.target.result;
            localStorage.setItem('imageData', imageData);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
    //multiple_image Image
    $('#multiple_image').change('click', function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage2').attr('src', e.target.result);
            const imageData = e.target.result;
            localStorage.setItem('imageData', imageData);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
    // category ajax call
  
    $(document).ready(function(){
    $('#category_id').on('change',function(){
        var moduleId = $(this).val();
        
        $.ajax({
            url: "/get-category",
            data: {moduleId: moduleId},
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Log the response for debugging
                console.log(data.html); 

                // Populate the #sub_category_id dropdown with the returned HTML
                $('#sub_category_id').html(data.html);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});



    //form Validation
    @include('backend.validation.ItemInfo')

</script>
@endpush
