<div class="modal fade" id="AddcourseModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">Add New Course</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form action="{{ route('course.store') }}" method="post">
                @csrf
                <div class="modal-body px-5 py-4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="description" autocomplete="off"
                            placeholder="Program Title" required>
                    </div>

                    <div class="form-group">
                        <select name="status" id="gender" class="form-control " required>
                            <option selected disabled>Choose RLE status</option>
                            <option value="0">w/o RLE</option>
                            <option value="1">w/ RLE</option>
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
