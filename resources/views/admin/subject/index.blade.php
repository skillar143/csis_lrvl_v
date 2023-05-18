@extends('admin-layouts.master_layout')

@section('content')

<nav class="navbar navbar-expand navbar-light  topbar static-top ">
    <!-- Topbar Search -->
    <h1 class="h3 text-gray-800 mr-auto mb-2">Subject List</h1>
    <div class="float-right">
        <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#AddsubjectModal">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Add Subject</span>
        </a>
</div>
</nav>

<div class="card shadow mb-4 animated--grow-in">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Programs</h6>
    </div>
    <div class="card-body p-5">
        <div class="table-responsive">
            <table class="table p-3" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-dark">
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-auto">Subject Description</th>
                        <th class="col-2">Laboratory Status</th>
                        <th class="col-2">Type</th>
                        <th class="col-2">Action</th>


                    </tr>
                </thead>
                <tbody>
                @foreach ($subjects as $subject)
                   <tr>
                     <td id="code" >{{$subject->subject_code}}</td>
                     <td id="description" >{{$subject->subject_description}}</td>
                     <td id="labstatus" >{{$subject->getLabStatus()}}</td>
                     <td id="type" >{{$subject->getType()}}</td>
                     <td class="d-flex">

                            <a href="#" class="btn btn-sm btn-info btn-icon-split m-1 edit-subject" data-toggle="modal" data-target="#editSubject"
                              data-id="{{$subject->id}}" data-subcode="{{$subject->subject_code}}" data-description="{{$subject->subject_description}}"
                              data-lab="{{$subject->subject_laboratory_status}}" data-type="{{$subject->subject_type}}">
                                <span class="icon text-white-50">
                                <i class="fas fa-pen"></i>
                                </span>
                                <span class="text d-none d-xl-block">Edit</span>
                            </a>

                            <a href="#" class="btn btn-sm btn-danger btn-icon-split m-1 delete-subject" data-toggle="modal" data-target="#deleteSubject"
                            data-id="{{$subject->id}}" data-subcode="{{$subject->subject_code}}" data-description="{{$subject->subject_description}}">
                                <span class="icon text-white-50">
                                <i class="fas fa-minus"></i>
                                </span>
                                <span class="text d-none d-xl-block">Delete</span>
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
