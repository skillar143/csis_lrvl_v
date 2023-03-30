<div class="modal fade" id="editCourse" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">Edit Course</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form id="courseUpdate" method="POST">
            @method('PUT')
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="description" id="edescription" autocomplete="off"
                            placeholder="Program Title" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-outline-success" onclick="document.getElementById('courseUpdate').submit()">Update</button>
                </div>

            </form>
        </div>
    </div>
</div>
