@extends('admin-layouts.master_layout')

@section('content')
<div class="card shadow mb-4 animated--grow-in">
    <div class="card-header py-3 d-flex">
        <div class="">
            <h6 class="m-0 font-weight-bold text-primary h5">Teachers</h6>
        </div>
        <div class="ml-auto">
            <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#AddteachersubjectModal">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text d-none d-xl-block">Add Subject</span>
            </a>
        </div>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead class="">
                    <tr>
                        <th class="col-1">Code</th>
                        <th class="col-5">Description</th>
                        <th class="col-5">Program</th>
                        <th class="col-5">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($my_subjects as $sub)
                    <tr>
                        <td>{{ $sub->subjects->subject_code }}</td>
                        <td>{{ $sub->subjects->subject_description }}</td>
                        <td>{{ $sub->programs->description }}</td>
                        <td>
                        <a href="#" class="btn btn-sm btn-danger btn-icon-split m-1 delete-facultySubject"  data-toggle="modal" data-target="#DeleteteachersubjectModal"
                          data-subjectid="{{$sub->subject_id}}" data-subdesc="{{ $sub->subjects->subject_description }}" data-subjectcode="{{ $sub->subjects->subject_code }}"
                          data-teacherid="{{ $faculty_id }}" data-prog="{{ $sub->programs->description }}" data-courseid="{{ $sub->course_id }}">
                            <span class="icon text-white-50">
                            <i class="fas fa-minus"></i>
                            </span>
                            <span class="text px-2 d-none d-xl-block">Remove</span>
                        </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@include('modals.admin.faculty._add-teacher-subject')
@include('modals.admin.faculty._delete-teacher-subject')

@endsection

@section('script')
<script>
 
 function getSubjects() {
    var program_id = $('#program_id').val();
    if(program_id) {
        $.ajax({
            url: '{{ route("get-subject-by-program", ":program_id") }}'.replace(':program_id', program_id),
            type: 'GET',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                $('#subject_id').empty();
                $('#subject_id').append('<option value="">Select Subject</option>');
                $.each(data, function(key, value){
                    $('#subject_id').append('<option value="'+value.subject_id+'">'+value.subjects.subject_code+' - '+value.subjects.subject_description+'</option>');


                });
                $('#subject_id').prop('disabled', false);
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    } else {
        $('#subject_id').prop('disabled', true);
    }
}

</script>
@endsection