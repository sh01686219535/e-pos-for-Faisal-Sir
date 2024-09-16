@extends('backend.dashboard.master')
@section('title')
Brand
@endsection
@section('content')
<div id="content" class="app-content p-3">
    <div class="row">
        <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-head">
                    <div class="head-main d-flex justify-content-between">
                        <h3>Brand</h3>
                        <a href="{{ route('brand.create') }}" class="btn btn-info"><i class="fas fa-plus"></i>
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
                                    <th>Brand Name</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach($brand as $item)
                                <tr>
                                    <td>#{{$i++}}</td>
                                    <td>{{$item->brandName}}</td>
                                    <td>
                                        @if($item->status == 'active')
                                        <span class="badge text-bg-success">{{$item->status}}</span>
                                        @elseif($item->status == 'inActive')
                                        <span class="badge text-bg-danger">{{$item->status}}</span>
                                        @endif

                                    </td>
                                    <td>
                                        <img src="{{asset($item->brandImage)}}" class="img-height-50" alt="">
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start">
                                            <a href="{{route('brand.edit', $item->id)}}"
                                                class="btn btn-primary mx-1 btn-sm"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('brand.destroy', $item->id) }}" method="post">
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