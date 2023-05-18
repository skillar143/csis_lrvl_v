<div class="modal fade" id="DeleteteachersubjectModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-light" id="exampleModalLabel">Delete Subject</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form id="facultySubjectDestroy" method="POST">
            @method('DELETE')
              @csrf
                <div class="modal-body px-5">
                <div class="form-group">
                        <label for="inputPasswordOld">Subject Code</label>
                        <input type="text" class="form-control" id="scode" name="code" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordNew">Subject Description</label>
                        <input type="text" class="form-control" id="sdes" name="desc" required disabled>
                        
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordNewVerify">Course</label>
                        <input type="text" class="form-control" id="scourse" name="crs" required disabled>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="document.getElementById('facultySubjectDestroy').submit()">Delete</button>
                </div>

            </form>
        </div>
    </div>
</div>

