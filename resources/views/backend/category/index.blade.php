@extends('backend.dashboard.master')
@section('title')
   Sub Module
@endsection
@section('content')
    <div id="content" class="app-content p-3">
        <div class="row">
            <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-head">
                        <div class="head-main d-flex justify-content-between">
                            <h3>Sub Module</h3>
                            <a href="{{ route('subModule.create') }}" class="btn btn-info"><i class="fas fa-plus"></i> Create</a>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Module Name</th>
                                        <th>Sub Module Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
