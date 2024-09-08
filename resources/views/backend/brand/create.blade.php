@extends('backend.dashboard.master')
@section('title')
    Create Brand
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
                <form action="{{ route('brand.store') }}" method="post" id="brandForm">
                    @csrf
                    <div class="mb-3 row">
                        <label for="brandName" class="col-sm-2 col-form-label">Brand Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="brandName" name="brandName">
                            <span class="text-danger" id="brandNameError"></span>
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
                    <div class="mb-3 row">
                        <label for="brandImage" class="col-sm-2 col-form-label">Brand Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="brandImage" name="brandImage">
                            <img style="width:100px;height:100px" id="showImage"
                                src="{{ asset('backendAsset/assets/img/previewImage.png') }}" alt=""
                                class="image-style rounded-circle my-3">
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
        $('#brandImage').change('click', function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
                const imageData = e.target.result;
                localStorage.setItem('imageData', imageData);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
        //form Validation
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('brandForm');

            const brandName = document.getElementById('brandName');
            const status = document.getElementById('status');

            const brandNameError = document.getElementById('brandNameError');
            const statusError = document.getElementById('statusError');
            brandName.addEventListener('input', function() {
                if (!brandName.value.trim()) {
                    brandNameError.textContent = 'Please enter your Brand Name.';
                    brandNameError.style.display = 'block';
                    brandName.classList.add('invalid');
                } else if (!/^[a-zA-Z\s]+$/.test(brandName.value)) { 
                    brandNameError.textContent = 'Brand Name should contain only letters and spaces.';
                    brandNameError.style.display = 'block';
                    brandName.classList.add('invalid');
                } else {
                    brandNameError.style.display = 'none';
                    brandName.classList.remove('invalid');
                }
            });

            status.addEventListener('change', function() { 
                if (!status.value.trim()) {
                    statusError.textContent = 'Please Select Status.';
                    statusError.style.display = 'block';
                    status.classList.add('invalid');
                } else {
                    statusError.style.display = 'none';
                    status.classList.remove('invalid');
                }
            });
            form.addEventListener('submit', function(event) {
                brandName.dispatchEvent(new Event('input'));
                status.dispatchEvent(new Event('change'));
                if (document.querySelectorAll('.invalid').length === 0) {
                    form.submit();
                } else {
                    event.preventDefault();
                }
            });
        });
    </script>
@endpush
