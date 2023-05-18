<div class="modal fade" id="deleteCourse" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-light" id="exampleModalLabel">Delete Course</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form id="courseDestroy" method="POST">
            @method('DELETE')
            @csrf
                <div class="modal-body px-5 py-4">
                    Select "Delete" below if you want to delete the course <p class="h5" id="course"></p>.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="document.getElementById('courseDestroy').submit()">Delete</button>
                </div>

            </form>
        </div>
    </div>
</div>
