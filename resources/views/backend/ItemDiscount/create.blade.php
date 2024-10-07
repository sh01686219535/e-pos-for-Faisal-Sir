@extends('backend.dashboard.master')
@section('title')
Create Price Discount
@endsection
@section('content')
<div id="content" class="app-content p-3">
    <div class="head-main d-flex justify-content-between my-3">
        <h3>Item Discount Price Create</h3>
        <a href="{{ route('item_price_discount.index') }}" class="btn btn-info "><i class="fas fa-list"></i> Cost Info
            List</a>
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
            <form action="{{ route('item_price_discount.store') }}" method="post" id="itemCostForm">
                @csrf
                <div class="row">
                    <div class="col-sm-8 col-md-6 col-lg-6 col-xl-6">
                        <label for="category_id" class=" col-form-label">Item Info</label>
                        <div>
                            <select class="form-control" id="item_info_id" name="item_info_id">
                                <option value="">Select Item</option>
                                @foreach($itemInfo as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="item_info_Error"></span>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-6 col-xl-6">
                        <label for="item_cost_id" class=" col-form-label">Item Info</label>
                        <div>
                            <select class="form-control" id="item_cost_id" name="item_cost_id">
                                <option value="">Select Item</option>
                                @foreach($itemInfoCost as $item)
                                <option value="{{$item->id}}">{{$item->total_Purchase_cost}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="item_cost_Error"></span>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-6 col-xl-6">
                        <label for="item_price_id" class=" col-form-label">Item Info</label>
                        <div>
                            <select class="form-control" id="item_price_id" name="item_price_id">
                                <option value="">Select Item</option>
                                @foreach($ItemPrice as $item)
                                <option value="{{$item->id}}">{{$item->item_price}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="item_price_Error"></span>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-6 col-xl-6">
                        <label for="discount_amount" class=" col-form-label">Discount Amount</label>
                        <div>
                            <input type="text" class="form-control" id="discount_amount">
                            <span class="text-danger" id="discount_amountError"></span>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-6 col-xl-6">
                        <label for="discount_amount_total" class=" col-form-label">Total Purchase Cost</label>
                        <div>
                            <input type="text" class="form-control" id="discount_amount_total" name="discount_amount">
                            <span class="text-danger" id="toal_costError"></span>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-6 col-xl-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-3 col-lg-3 col-xl-3 mt-2">
                                <div class="checkbox-wrapper-55 main-checkbox">
                                    <label class="rocker rocker-small d-inline-block">
                                        <input type="checkbox" id="vat_percentage">
                                        <span class="switch-left">Yes</span>
                                        <span class="switch-right">No</span>
                                    </label>
                                    <label class="d-inline-block child-box">Percentage</label>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 col-xl-3 mt-2">
                                <div class="checkbox-wrapper-55 main-checkbox">
                                    <label class="rocker rocker-small d-inline-block">
                                        <input type="checkbox" id="vat_flat">
                                        <span class="switch-left">Yes</span>
                                        <span class="switch-right">No</span>
                                    </label>
                                    <label class="d-inline-block child-box">Flat</label>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group row mt-3">
                        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <button type="submit" class="btn btn-outline-theme">Submit</button>
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {

    $(document).ready(function() {
        function calculateTotalCost() {
            var purchase_price = parseFloat($('#discount_amount').val()) || 0;
            var vat = parseFloat($('#vat').val()) || 0;
            var vat_percentage = $('#vat_percentage').is(':checked');
            var vat_flat = $('#vat_flat').is(':checked');
   
            var totalCost = purchase_price;

            // Calculate VAT
            if (vat_percentage) {
                var vatValue = (purchase_price * vat) / 100;
                totalCost += vatValue;
            } else if (vat_flat) {
                totalCost += vat;
            }

            // Set the total cost value
            $('#total_Purchase_cost').val(totalCost.toFixed(2));
        }

        // Trigger calculation on keyup/change events
        $('#discount_amount, #vat, #vat_percentage, #vat_flat')
            .on('keyup change', function() {
                calculateTotalCost();
            });
    });

});
@include('backend.validation.itemcost')
</script>
@endpush