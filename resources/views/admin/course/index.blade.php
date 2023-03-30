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
            <table class="table table-bordered "  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-6">Program Title</th>
                        <th class="col-2">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach ($programs as $program)
                   <tr>
                     <td class=" text-center ">{{$program->Description}}</td>
                     <td >

                            <a href="#" class="btn btn-sm btn-success">
                                <i class="fas fa-eye"></i>
                            </a>

                            <a href="#" class="btn btn-sm btn-info btn-icon-split edit-course" data-toggle="modal" data-target="#editCourse" 
                                data-id="{{$program->id}}"  data-description="{{$program->Description}}">
                                <span class="icon text-white-50">
                                <i class="fas fa-pen"></i>
                                </span>
                                <span class="text px-3">Edit</span>
                            </a>


                            <a href="#" class="btn btn-sm btn-danger btn-icon-split delete-course" data-toggle="modal" data-target="#deleteCourse"data-id="{{$program->id}}" 
                                data-description="{{$program->Description}}">
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
