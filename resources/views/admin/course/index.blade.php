@extends('admin-layouts.master_layout')

@section('content')

<nav class="navbar navbar-expand navbar-light  topbar static-top ">
    <!-- Topbar Search -->
    <h1 class="h3 text-gray-800 mr-auto mb-2">Course List</h1>
    <div class="float-right">
        <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#AddcourseModal">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Add Program</span>
        </a>
</div>
</nav>





<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Programs</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Program Title</th>
                        <th>Action</th>


                    </tr>
                </thead>
                <tbody>
                        {{-- table content here --}}

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
