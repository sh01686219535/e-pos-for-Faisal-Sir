@extends('backend.dashboard.master')
@section('title')
Update Supplier
@endsection
@section('content')
<div id="content" class="app-content p-3">
    <div class="head-main d-flex justify-content-between my-3">
        <h3>Supplier Update</h3>
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
            <form action="{{ route('supplier.update',$supplier->id) }}" method="post" id="brandForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="supplier_name" class="col-sm-2 col-form-label">Supplier Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="supplier_name" name="supplier_name" value="{{$supplier->supplier_name}}">
                        <span class="text-danger" id="supplierNameError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="supplier_address" class="col-sm-2 col-form-label">Supplier Address</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="supplier_address" name="supplier_address" value="{{$supplier->supplier_address}}">
                        <span class="text-danger" id="supplierAddressError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="phone" class="col-sm-2 col-form-label">Supplier Phone</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$supplier->phone}}">
                        <span class="text-danger" id="phoneError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Supplier Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email" value="{{$supplier->email}}">
                        <span class="text-danger" id="emailError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tin_number" class="col-sm-2 col-form-label">Tin Number</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tin_number" name="tin_number" value="{{$supplier->tin_number}}">
                        <span class="text-danger" id="tinNumberError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="trade_license" class="col-sm-2 col-form-label">trade license number</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="trade_license" name="trade_license" value="{{$supplier->trade_license}}">
                        <span class="text-danger" id="tradeLicenseError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bank_ac_no" class="col-sm-2 col-form-label">Bank Ac No.</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="bank_ac_no" name="bank_ac_no" value="{{$supplier->bank_ac_no}}">
                        <span class="text-danger" id="bankAcNoError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="emergency_contact" class="col-sm-2 col-form-label">Emergency Contact</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="emergency_contact" name="emergency_contact" value="{{$supplier->emergency_contact}}">
                        <span class="text-danger" id="emergencyContactError"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" id="image" name="image">
                        @if($supplier->image)
                        <img src="{{asset($supplier->image)}}" alt="" class="image-style rounded-circle my-3 img-height">
                        @else
                        <img id="showImage" src="{{ asset('backendAsset/assets/img/previewImage.png') }}" alt=""
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
$('#image').change('click', function(e) {
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