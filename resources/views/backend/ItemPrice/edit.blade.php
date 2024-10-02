@extends('backend.dashboard.master')
@section('title')
Update Item Price
@endsection
@section('content')
<div id="content" class="app-content p-3">
    <div class="head-main d-flex justify-content-between my-3">
        <h3>Item Price</h3>
        <a href="{{ route('item_price.index') }}" class="btn btn-info "><i class="fas fa-list"></i> Item Price
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
            <form action="{{ route('item_price.update',$ItemPrice->id) }}" method="post" id="itemPriceForm">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-8 col-md-6 col-lg-6 col-xl-6">
                        <label for="item_info_id" class=" col-form-label">Item Info</label>
                        <div>
                            <select class="form-control" id="item_info_id" name="item_info_id">
                                <option value="">Select Item</option>
                                @foreach($itemInfo as $item)
                                <option value="{{$item->id}}"{{$ItemPrice->item_info_id = $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="item_info_Error"></span>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-6 col-xl-6">
                        <label for="item_cost_id" class=" col-form-label">Item Cost</label>
                        <div>
                            <select class="form-control" id="item_cost_id" name="item_cost_id">
                                <option value="">Select Cost</option>
                                @foreach($itemInfoCost as $item)
                                <option value="{{$item->id}}" {{$ItemPrice->item_cost_id = $item->id ? 'selected' : ''}}>{{$item->total_Purchase_cost}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="item_cost_Error"></span>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-6 col-xl-6">
                        <label for="item_price" class=" col-form-label">Item Price</label>
                        <div>
                            <input type="text" class="form-control" id="item_price" name="item_price" value="{{$ItemPrice->item_price}}">
                            <span class="text-danger" id="item_priceError"></span>
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

@include('backend.validation.itemprice')
</script>
@endpush