<div class="modal fade" id="AddteachersubjectModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">Add Subject</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form action="{{ route('faculty.storeSubject',$faculty_id) }}" method="post">
                @csrf
                <div class="modal-body px-5 py-4">
                    
                    <div class="form-group">
                        <label for="program_id">Program:</label>
                        <select class="form-control" id="program_id" name="program_id" onchange="getSubjects()" required>
                            <option value="">Select Program</option>
                            @foreach ($programs as $program)
                                <option value="{{ $program->id }}">{{ $program->description }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="subject_id">Subject:</label>
                        <select class="form-control" id="subject_id" name="subject_id" disabled required>
                            <option value="">Select Subject</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-outline-primary" type="submit" >Add</button>
                </div>

            </form>
        </div>
    </div>
</div>

