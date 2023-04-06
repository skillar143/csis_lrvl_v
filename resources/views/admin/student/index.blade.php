@extends('admin-layouts.master_layout')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex">
        <div class="">
            <h6 class="m-0 font-weight-bold text-primary h5">Students</h6>
        </div>
        <div class="ml-auto">
            <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#AddstudentModal">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Student</span>
            </a>
        </div>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-light">
                    <tr>
                        <th class="">ID</th>
                        <th class="">Name</th>
                        <th class="">Sex</th>
                        <th class="">Cell No.</th>
                        <th class="">Address</th>
                        <th class="">Action</th>
                    </tr>
                </thead>

                <tbody>
                @foreach ($students as $student)
                   <tr>
                     <td>{{$faculty->student_id}}</td>
                     <td>{{$faculty->name}}</td>
                     <td>{{$faculty->sex}}</td>
                     <td>{{$faculty->cellphone}}</td>
                     <td>{{$faculty->address}}</td>



                     <td class="text-center">
                     <a href="#" class="btn btn-sm btn-info btn-icon-split edit-faculty" data-toggle="modal" data-target="#editFaculty"
                          data-id="{{$student->id}}" data-name="{{$student->name}}" data-sex="{{$student->sex}}"
                          data-number="{{$student->cellphone}}" data-address="{{$student->address}}" data-teacherid="{{$student->student_id}}">
                                <span class="icon text-white-50">
                                <i class="fas fa-pen"></i>
                                </span>
                                <span class="text px-3">Edit</span>
                            </a>

                            <a href="#" class="btn btn-sm btn-danger btn-icon-split my-1 delete-faculty"  data-toggle="modal" data-target="#deleteFaculty"
                            data-id="{{$student->id}}" data-name="{{$student->name}}" data-sex="{{$student->sex}}">
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

@include('modals.admin._create-student')



@endsection
