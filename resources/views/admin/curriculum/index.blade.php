@extends('admin-layouts.master_layout')

@section('content')
<nav class="navbar navbar-expand navbar-light  topbar static-top ">
    <!-- Topbar Search -->
    <h1 class="h3 text-gray-800 mr-auto mb-2"> {{ $course->description }}</h1>
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
                <span class="text d-none d-xl-block">Add Subject</span>
            </a>
        </div>

    </div>
    <div class="card-body">

   <!-- first semester -->
    <p class="m-0 font-weight-bold text-primary h6"> 1st Semester</p>
    <div class="table-responsive">
            <table class="table  table-bordered"  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-1 text-center">Units</th>
                        <th class="col-1 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>

                @forelse ($firstyear->where('semester', '1') as $subject )
                   <tr>
                     <td class=" ">{{ $subject->subjects->subject_code }}</td>
                     <td class=" ">{{ $subject->subjects->subject_description }}</td>
                     <td class="text-center">{{ $subject->units }}</td>
                     <td class="text-center">
                        <a href="#" class="btn btn-sm btn-danger btn-icon-split my-1 delete-curr"  data-toggle="modal" data-target="#deleteCurr"
                        data-id="" data-name="" data-sex="">
                            <span class="icon text-white-50">
                            <i class="fas fa-minus"></i>
                            </span>
                            <span class="text d-none d-xl-block">Delete</span>
                        </a>
                    </td>
                   </tr>
                @empty
                <tr>
                    <td colspan="4">
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
            <table class="table table-bordered"  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-1 text-center">Units</th>
                        <th class="col-1 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($firstyear->where('semester', '2') as $subject)
                    <tr>
                        <td class=" ">{{ $subject->subjects->subject_code }}</td>
                        <td class=" ">{{ $subject->subjects->subject_description }}</td>
                        <td class="text-center">{{ $subject->units }}</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-danger btn-icon-split my-1 delete-curr"  data-toggle="modal" data-target="#deleteCurr"
                            data-id="" data-name="" data-sex="">
                                <span class="icon text-white-50">
                                <i class="fas fa-minus"></i>
                                </span>
                                <span class="text d-none d-xl-block">Delete</span>
                            </a>
                        </td>
                    </tr>
                 @empty
                 <tr>
                     <td colspan="4">
                         <p>No Subject</p>
                     </td>
                 </tr>

                 @endforelse
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
            <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#secondCurr">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text d-none d-xl-block">Add Subject</span>
            </a>
        </div>

    </div>
    <div class="card-body">

   <!-- first semester -->
    <p class="m-0 font-weight-bold text-primary h6"> 1st Semester</p>
    <div class="table-responsive">
            <table class="table table-bordered"  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-1 text-center">Units</th>
                        <th class="col-1 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($secondyear->where('semester', '1') as $subject)
                    <tr>
                        <td class=" ">{{ $subject->subjects->subject_code }}</td>
                        <td class=" ">{{ $subject->subjects->subject_description }}</td>
                        <td class="text-center">{{ $subject->units }}</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-danger btn-icon-split my-1 delete-curr"  data-toggle="modal" data-target="#deleteCurr"
                            data-id="" data-name="" data-sex="">
                                <span class="icon text-white-50">
                                <i class="fas fa-minus"></i>
                                </span>
                                <span class="text d-none d-xl-block">Delete</span>
                            </a>
                        </td>
                    </tr>
                 @empty
                 <tr>
                     <td colspan="4">
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
            <table class="table table-bordered"  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-1 text-center">Units</th>
                        <th class="col-1 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($secondyear->where('semester', '2') as $subject)
                    <tr>
                        <td class=" ">{{ $subject->subjects->subject_code }}</td>
                        <td class=" ">{{ $subject->subjects->subject_description }}</td>
                        <td class="text-center">{{ $subject->units }}</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-danger btn-icon-split my-1 delete-curr"  data-toggle="modal" data-target="#deleteCurr"
                            data-id="" data-name="" data-sex="">
                                <span class="icon text-white-50">
                                <i class="fas fa-minus"></i>
                                </span>
                                <span class="text d-none d-xl-block">Delete</span>
                            </a>
                        </td>
                    </tr>
                 @empty
                 <tr>
                     <td colspan="4">
                         <p>No Subject</p>
                     </td>
                 </tr>

                 @endforelse
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
            <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#thirdCurr">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text d-none d-xl-block">Add Subject</span>
            </a>
        </div>

    </div>
    <div class="card-body">

   <!-- first semester -->
    <p class="m-0 font-weight-bold text-primary h6"> 1st Semester</p>
    <div class="table-responsive">
            <table class="table table-bordered"  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-1 text-center">Units</th>
                        <th class="col-1 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($thirdyear->where('semester', '1') as $subject)
                    <tr>
                        <td class=" ">{{ $subject->subjects->subject_code }}</td>
                        <td class=" ">{{ $subject->subjects->subject_description }}</td>
                        <td class="text-center">{{ $subject->units }}</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-danger btn-icon-split my-1 delete-curr"  data-toggle="modal" data-target="#deleteCurr"
                            data-id="" data-name="" data-sex="">
                                <span class="icon text-white-50">
                                <i class="fas fa-minus"></i>
                                </span>
                                <span class="text d-none d-xl-block">Delete</span>
                            </a>
                        </td>
                    </tr>
                 @empty
                 <tr>
                     <td colspan="4">
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
            <table class="table table-bordered"  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-1 text-center">Units</th>
                        <th class="col-1 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($thirdyear->where('semester', '2') as $subject)
                    <tr>
                        <td class=" ">{{ $subject->subjects->subject_code }}</td>
                        <td class=" ">{{ $subject->subjects->subject_description }}</td>
                        <td class="text-center">{{ $subject->units }}</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-danger btn-icon-split my-1 delete-curr"  data-toggle="modal" data-target="#deleteCurr"
                            data-id="" data-name="" data-sex="">
                                <span class="icon text-white-50">
                                <i class="fas fa-minus"></i>
                                </span>
                                <span class="text d-none d-xl-block">Delete</span>
                            </a>
                        </td>
                    </tr>
                 @empty
                 <tr>
                     <td colspan="4">
                         <p>No Subject</p>
                     </td>
                 </tr>

                 @endforelse
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
            <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#fourthCurr">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text d-none d-xl-block">Add Subject</span>
            </a>
        </div>

    </div>
    <div class="card-body">

   <!-- first semester -->
    <p class="m-0 font-weight-bold text-primary h6"> 1st Semester</p>
    <div class="table-responsive">
            <table class="table table-bordered"  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-1 text-center">Units</th>
                        <th class="col-1 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($fourthyear->where('semester', '1') as $subject)
                    <tr>
                        <td class=" ">{{ $subject->subjects->subject_code }}</td>
                        <td class=" ">{{ $subject->subjects->subject_description }}</td>
                        <td class="text-center">{{ $subject->units }}</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-danger btn-icon-split my-1 delete-curr"  data-toggle="modal" data-target="#deleteCurr"
                            data-id="" data-name="" data-sex="">
                                <span class="icon text-white-50">
                                <i class="fas fa-minus"></i>
                                </span>
                                <span class="text d-none d-xl-block">Delete</span>
                            </a>
                        </td>
                    </tr>
                 @empty
                 <tr>
                     <td colspan="4">
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
            <table class="table table-bordered"  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Subject Code</th>
                        <th class="col-6">Subject Title</th>
                        <th class="col-1 text-center">Units</th>
                        <th class="col-1 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($fourthyear->where('semester', '2') as $subject)
                    <tr>
                        <td class=" ">{{ $subject->subjects->subject_code }}</td>
                        <td class=" ">{{ $subject->subjects->subject_description }}</td>
                        <td class="text-center">{{ $subject->units }}</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-danger btn-icon-split my-1 delete-curr"  data-toggle="modal" data-target="#deleteCurr"
                            data-id="" data-name="" data-sex="">
                                <span class="icon text-white-50">
                                <i class="fas fa-minus"></i>
                                </span>
                                <span class="text d-none d-xl-block">Delete</span>
                            </a>
                        </td>
                    </tr>
                 @empty
                 <tr>
                     <td colspan="4">
                         <p>No Subject</p>
                     </td>
                 </tr>

                 @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

@include('modals.admin._add-firstyear-subject')
@include('modals.admin._add-secondyear-subject')
@include('modals.admin._add-thirdyear-subject')
@include('modals.admin._add-fourthyear-subject')

@endsection
