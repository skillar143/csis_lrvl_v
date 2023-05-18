<div class="modal fade" id="editSubject" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">Edit Subject</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form id="subjectUpdate" method="POST">
            @method('PUT')
            @csrf

                <div class="modal-body px-5 py-4" id="subject">

                    <div class="form-group d-flex">
                        <label for="subcode" style="width: 100%; padding:1px">Subject Code
                            <input type="text" class="form-control w-100" name="subcode" autocomplete="off" id="subcode" required>
                        </label>
                    </div>

                    <div class="form-group d-flex">
                        <label for="subdescription" style="width: 100%; padding:1px">Subject Description
                            <input type="text" class="form-control w-100" name="subdescription" autocomplete="off" id="subdescription" required>
                        </label>
                    </div>

                    <div class="form-group">
                        <select name="labstatus"  class="form-control m-1" id="sublab" required>
                            <option selected disabled>Choose Laboratory Status</option>
                            <option value="0">No Laboratory</option>
                            <option value="1">With Laboratory</option>
                        </select>
                        <span class="form-text small text-muted">
                            Lab Status: Indicates if the subject has a laboratory component.
                        </span>
                    </div>

                    <div class="form-group">
                        <select name="type"  class="form-control m-1" id="substatus" required>
                            <option selected disabled>Choose Type of Subject</option>
                            <option value="0">Regular Subject</option>
                            <option value="1">RLE Subject</option>
                        </select>
                        <span class="form-text small text-muted">
                            The subject type determines if it's RLE or non-RLE.
                        </span>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-outline-success" onclick="document.getElementById('subjectUpdate').submit()">Update</button>
                </div>

            </form>
        </div>
    </div>
</div>







