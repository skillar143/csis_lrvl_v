@extends('admin-layouts.master_layout')

@section('content')

<nav class="navbar navbar-expand navbar-light  topbar static-top ">
    <!-- Topbar Search -->
    
    <div class="float-right">
        <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#AddsubjectModal">
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
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class=" text-center ">
                    <tr>
                        <th class="col-1">Subject Code</th>
                        <th class="col-5">Subject Description</th>
                        <th class="col-2">Action</th>

                        
                    </tr>
                </thead>
                <tbody>
                @foreach ($subjects as $subject)
                   <tr>
                     <td>{{$subject->subject_code}}</td>
                     <td>{{$subject->subject_description}}</td>

                     <td class="text-center">
                          <a href="#" class="btn btn-sm btn-info btn-icon-split ">
                                <span class="icon text-white-50">
                                <i class="fas fa-edit"></i>
                                </span>
                                <span class="text px-3">Edit</span>
                            </a>

                            <a href="#" class="btn btn-sm btn-danger btn-icon-split ">
                                <span class="icon text-white-50">
                                <i class="fas fa-minus"></i>
                                </span>
                                <span class="text">Delete</span>
                            </a>
                     </td>
                   </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
