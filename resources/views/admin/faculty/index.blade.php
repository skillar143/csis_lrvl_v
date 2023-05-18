@extends('admin-layouts.master_layout')

@section('content')

<div class="card shadow mb-4 animated--grow-in">
    <div class="card-header py-3 d-flex">
        <div class="">
            <h6 class="m-0 font-weight-bold text-primary h5">Teachers</h6>
        </div>
        <div class="ml-auto">
            <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#AddfacultyModal">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Faculty</span>
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
                        <th class="">Sex</th>
                        <th class="">Cell No.</th>
                        <th class="">Address</th>
                        <th class="d-flex">Action</th>
                    </tr>
                </thead>

                <tbody>
                @foreach ($faculties as $faculty)
                   <tr>
                     <td>{{$faculty->teacher_id}}</td>
                     <td>{{$faculty->name}}</td>
                     <td>{{$faculty->sex}}</td>
                     <td>{{$faculty->cellphone}}</td>
                     <td>{{$faculty->address}}</td>
                     <td class="d-flex">
                   
                        <a href="{{ route('faculty.view', $faculty->id)}}" class="btn btn-sm btn-success btn-icon-split m-1">
                            <span class="icon text-white-50">
                                <i class="fas fa-eye"></i>
                                </span>
                                <span class="text px-2 d-none d-xl-block">View</span>
                        </a>

                        <a href="#" class="btn btn-sm btn-info btn-icon-split m-1 edit-faculty" data-toggle="modal" data-target="#editFaculty"
                          data-id="{{$faculty->id}}" data-name="{{$faculty->name}}" data-sex="{{$faculty->sex}}"
                          data-number="{{$faculty->cellphone}}" data-address="{{$faculty->address}}" data-teacherid="{{$faculty->teacher_id}}">
                            <span class="icon text-white-50">
                            <i class="fas fa-pen"></i>
                            </span>
                            <span class="text px-2 d-none d-xl-block">Edit</span>
                        </a>

                        <a href="#" class="btn btn-sm btn-danger btn-icon-split m-1 delete-faculty"  data-toggle="modal" data-target="#deleteFaculty"
                          data-id="{{$faculty->teacher_id}}" data-name="{{$faculty->name}}" data-sex="{{$faculty->sex}}">
                            <span class="icon text-white-50">
                            <i class="fas fa-minus"></i>
                            </span>
                            <span class="text px-2 d-none d-xl-block">Delete</span>
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
