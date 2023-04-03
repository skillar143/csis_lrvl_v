@extends('admin-layouts.master_layout')

@section('content')
<nav class="navbar navbar-expand navbar-light  topbar static-top ">
    <!-- Topbar Search -->
    <h1 class="h3 text-gray-800 mr-auto mb-2"> {{ $course->Description }}</h1>
</nav>

<!-- first year -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex">
        <div class="">
            <h6 class="m-0 font-weight-bold text-primary h5">1st Year Curriculum</h6>
        </div>
        <div class="ml-auto">
            <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#firstCurr">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Subject</span>
            </a>
        </div>

    </div>
    <div class="card-body">

   <!-- first semester -->
    <p class="m-0 font-weight-bold text-primary h6"> 1st Semester</p>
    <div class="table-responsive">
            <table class="table  "  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-2 text-center">Units</th>
                        <th class="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>

                @forelse ($firstyear as $subject)
                   <tr>
                     <td class=" ">{{ $subject->subject_code }}</td>
                     <td class=" ">{{ $subject->subject_description }}</td>
                     <td class="text-center">3</td>
                     <td class=" ">4</td>
                   </tr>
                @empty
                <tr>
                    <td>
                        <p>No Subject</p>
                    </td>
                </tr>
                   
                @endforelse
                </tbody>
            </table>
        </div>
<!-- second semester -->
        <p class="m-0 font-weight-bold text-primary h6"> 2nd Semester</p>
    <div class="table-responsive">
            <table class="table table-bordered "  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-2">Units</th>
                        <th class="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                     <td class=" text-center ">1</td>
                     <td class=" text-center ">2</td>
                     <td class=" text-center ">3</td>
                     <td class=" text-center ">4</td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</div>

<!-- second year -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex">
        <div class="">
            <h6 class="m-0 font-weight-bold text-primary h5">2nd Year Curriculum</h6>
        </div>
        <div class="ml-auto">
            <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#AddcurrModal">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Subject</span>
            </a>
        </div>

    </div>
    <div class="card-body">

   <!-- first semester -->
    <p class="m-0 font-weight-bold text-primary h6"> 1st Semester</p>
    <div class="table-responsive">
            <table class="table table-bordered "  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-2">Units</th>
                        <th class="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                     <td class=" text-center ">1</td>
                     <td class=" text-center ">2</td>
                     <td class=" text-center ">3</td>
                     <td class=" text-center ">4</td>
                   </tr>
                </tbody>
            </table>
        </div>
<!-- second semester -->
        <p class="m-0 font-weight-bold text-primary h6"> 2nd Semester</p>
    <div class="table-responsive">
            <table class="table table-bordered "  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-2">Units</th>
                        <th class="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                     <td class=" text-center ">1</td>
                     <td class=" text-center ">2</td>
                     <td class=" text-center ">3</td>
                     <td class=" text-center ">4</td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- third year -->

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex">
        <div class="">
            <h6 class="m-0 font-weight-bold text-primary h5">3rd Year Curriculum</h6>
        </div>
        <div class="ml-auto">
            <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#AddcurrModal">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Subject</span>
            </a>
        </div>

    </div>
    <div class="card-body">

   <!-- first semester -->
    <p class="m-0 font-weight-bold text-primary h6"> 1st Semester</p>
    <div class="table-responsive">
            <table class="table table-bordered "  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-2">Units</th>
                        <th class="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                     <td class=" text-center ">1</td>
                     <td class=" text-center ">2</td>
                     <td class=" text-center ">3</td>
                     <td class=" text-center ">4</td>
                   </tr>
                </tbody>
            </table>
        </div>
<!-- second semester -->
        <p class="m-0 font-weight-bold text-primary h6"> 2nd Semester</p>
    <div class="table-responsive">
            <table class="table table-bordered "  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-2">Units</th>
                        <th class="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                     <td class=" text-center ">1</td>
                     <td class=" text-center ">2</td>
                     <td class=" text-center ">3</td>
                     <td class=" text-center ">4</td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- fourth year -->

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex">
        <div class="">
            <h6 class="m-0 font-weight-bold text-primary h5">4th Year Curriculum</h6>
        </div>
        <div class="ml-auto">
            <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#AddcurrModal">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Subject</span>
            </a>
        </div>

    </div>
    <div class="card-body">

   <!-- first semester -->
    <p class="m-0 font-weight-bold text-primary h6"> 1st Semester</p>
    <div class="table-responsive">
            <table class="table table-bordered "  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-2">Units</th>
                        <th class="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                     <td class=" text-center ">1</td>
                     <td class=" text-center ">2</td>
                     <td class=" text-center ">3</td>
                     <td class=" text-center ">4</td>
                   </tr>
                </tbody>
            </table>
        </div>
<!-- second semester -->
        <p class="m-0 font-weight-bold text-primary h6"> 2nd Semester</p>
    <div class="table-responsive">
            <table class="table table-bordered "  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-2">Units</th>
                        <th class="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                     <td class=" text-center ">1</td>
                     <td class=" text-center ">2</td>
                     <td class=" text-center ">3</td>
                     <td class=" text-center ">4</td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</div>

@include('modals.admin._add-firstyear-subject')

@endsection 