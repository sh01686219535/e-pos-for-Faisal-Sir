@extends('backend.dashboard.master')
@section('title')
    Assign Permission
@endsection
@section('content')
    <div id="content" class="app-content p-3">
        <div class="row">
            <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-head">
                        <div class="head-main d-flex justify-content-between">
                            <h3>Assign Permission</h3>
                            <a href="{{ route('assignPermission.create') }}" class="btn btn-info"><i class="fas fa-plus"></i> Create</a>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th>Role Name</th>
                                        <th>Permission Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1 @endphp
        
                                    @forelse ($role as $item)
                                    <tr>
                                        <td>{{$i++}}</td>
        
                                        <td> {{ $item->role_name }}</td>
                                        <td> @foreach($item->permissions as $permission)
                                            <button class="btn btn-sm btn-success"><span style="font-size:10px;"> {{$permission->permission_name}} </span></button>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ route('showEdit-assign-permission',$item->id) }}" title="Edit" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <a href="{{ route('delete-assign-permission',$item->id) }}" title="Delete" class="btn btn-danger" id="delete"><i class="fa-solid fa-trash"></i></a>
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
