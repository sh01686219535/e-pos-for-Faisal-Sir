@extends('backend.dashboard.master')
@section('title')
Create Supplier
@endsection
@section('content')
<div id="content" class="app-content p-3">
    <div class="head-main d-flex justify-content-between my-3">
        <h3>Supplier Create</h3>
        <a href="{{ route('supplier.index') }}" class="btn btn-info "><i class="fas fa-list"></i> Supplier List</a>
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
            <form action="{{ route('supplier.store') }}" method="post" id="brandForm" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="supplierName" class="col-sm-2 col-form-label">Supplier Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="supplierName" name="supplierName">
                        <span class="text-danger" id="supplierNameError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="supplierAddress" class="col-sm-2 col-form-label">Supplier Address</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="supplierAddress" name="supplierAddress">
                        <span class="text-danger" id="supplierAddressError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="phone" class="col-sm-2 col-form-label">Supplier Phone</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="phone" name="phone">
                        <span class="text-danger" id="phoneError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Supplier Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email">
                        <span class="text-danger" id="emailError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tinNumber" class="col-sm-2 col-form-label">Tin Number</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tinNumber" name="tinNumber">
                        <span class="text-danger" id="tinNumberError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tradeLicense" class="col-sm-2 col-form-label">trade license number</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tradeLicense" name="tradeLicense">
                        <span class="text-danger" id="tradeLicenseError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bankAcNo" class="col-sm-2 col-form-label">Bank Ac No.</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="bankAcNo" name="bankAcNo">
                        <span class="text-danger" id="bankAcNoError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="emergencyContact" class="col-sm-2 col-form-label">Emergency Contact</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="emergencyContact" name="emergencyContact">
                        <span class="text-danger" id="emergencyContactError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" id="image" name="image">
                        <img id="showImage" src="{{ asset('backendAsset/assets/img/previewImage.png') }}" alt=""
                            class="image-style rounded-circle my-3 img-height">
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
@include('backend.validation.supplier')

</script>
@endpush