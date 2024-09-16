@extends('backend.dashboard.master')
@section('title')
Color
@endsection
@section('content')
<div id="content" class="app-content p-3">
    <div class="row">
        <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-head">
                    <div class="head-main d-flex justify-content-between">
                        <h3>Color</h3>
                        <a href="{{ route('color.create') }}" class="btn btn-info"><i class="fas fa-plus"></i>
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
                                    <th>Color Name</th>
                                    <th>Color Code</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                                @endphp
                                @foreach($color as $item)
                                <tr>
                                    <td>#{{$i++}}</td>
                                    <td>{{$item->colorName}}</td>
                                    <td>{{$item->colorCode}}</td>
                                    <td>
                                        @if($item->status == 'active')
                                        <span class="badge text-bg-success">{{$item->status}}</span>
                                        @elseif($item->status == 'inActive')
                                        <span class="badge text-bg-danger">{{$item->status}}</span>
                                        @endif

                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start">
                                            <a href="{{route('color.edit', $item->id)}}"
                                                class="btn btn-primary mx-1 btn-sm"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('color.destroy', $item->id) }}" method="post">
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