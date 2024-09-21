@extends('backend.dashboard.master')
@section('title')
Supplier
@endsection
@section('content')
<div id="content" class="app-content p-3">
    <div class="row">
        <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-head">
                    <div class="head-main d-flex justify-content-between">
                        <h3>Supplier</h3>
                        <a href="{{ route('supplier.create') }}" class="btn btn-info"><i class="fas fa-plus"></i>
                            Create</a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="example">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Tin Number</th>
                                    <th>Trade Number</th>
                                    <th>Bank Ac No.</th>
                                    <th>Emergency</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                                @endphp
                                @foreach($supplier as $item)
                                <tr>
                                    <td>#{{$i++}}</td>
                                    <td>{{$item->supplier_name}}</td>
                                    <td>{{$item->supplier_address}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->tin_number}}</td>
                                    <td>{{$item->trade_license}}</td>
                                    <td>{{$item->bank_ac_no}}</td>
                                    <td>{{$item->emergency_contact}}</td>
                                    <td>
                                        <img src="{{asset($item->image)}}" class="img-height-50" alt="">
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start">
                                            <a href="{{route('supplier.edit', $item->id)}}"
                                                class="btn btn-primary mx-1 btn-sm"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('supplier.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger delete-item  btn-sm"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection