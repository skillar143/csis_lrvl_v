@extends('admin-layouts.master_layout')

@section('content')

<div class="card shadow mb-4 animated--grow-in">
    <div class="card-header py-3 d-flex">
        <div class="">
            <h6 class="m-0 font-weight-bold text-primary h5">
                {{ $s_status ? 'Irregular':'Regular' }} Students</h6>
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
    <div class="card-body p-5">
        <div class="table-responsive">
            <table class="table p-3" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-dark">
                    <tr>
                        <th class="">ID</th>
                        <th class="">Name</th>
                        <th class="">Program</th>
                        <th class="">Sex</th>
                        <th class="">Cell No.</th>
                        <th class="">Birthday</th>
                        <th class="">Address</th>
                        <th class="">Year</th>
                        <th class="">Action</th>
                    </tr>
                </thead>

                <tbody>
                @foreach ($students as $student)
                   <tr>
                     <td>{{$student->student_id}}</td>
                     <td>{{$student->name}}</td>
                     <td>{{$student->program->description}}</td>
                     <td>{{$student->sex}}</td>
                     <td>{{$student->cellphone}}</td>
                     <td>{{$student->bday}}</td>
                     <td>{{$student->address}}</td>
                     <td>{{$student->getYear()}}</td>
                     <td class="d-flex">
                     <a href="#" class="btn btn-sm btn-info btn-icon-split m-1 edit-student" data-toggle="modal" data-target="#editStudent"
                          data-id="{{$student->id}}" data-studentid="{{$student->student_id}}" data-name="{{$student->name}}" data-course="{{ $student->program_id }}"
                          data-sex="{{$student->sex}}" data-contact="{{$student->cellphone}}" data-bday="{{ $student->bday }}" data-bplace="{{ $student->bplace }}"
                          data-address="{{$student->address}}" data-year="{{ $student->year }}" data-status="{{ $student->status }}">
                                <span class="icon text-white-50">
                                <i class="fas fa-pen"></i>
                                </span>
                                <span class="text d-none d-xl-block">Edit</span>
                            </a>

                            <a href="#" class="btn btn-sm btn-danger btn-icon-split m-1 delete-student"  data-toggle="modal" data-target="#deleteStudent"
                            data-id="{{$student->id}}" data-studentid="{{$student->student_id}}" data-name="{{$student->name}}" data-course="{{ $student->program_id }}"
                          data-sex="{{$student->sex}}" data-contact="{{$student->cellphone}}" data-bday="{{ $student->bday }}" data-bplace="{{ $student->bplace }}"
                          data-address="{{$student->address}}" data-year="{{ $student->year }}" data-status="{{ $student->status }}">
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

@include('modals.admin.student._create-student')
@include('modals.admin.student._edit-student')
@include('modals.admin.student._delete-student')



@endsection
