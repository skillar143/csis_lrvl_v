<div class="modal fade" id="AddsubjectModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">Add New Subject</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form action="{{ route('subject.store') }}" method="post">
                @csrf
                <div class="modal-body px-5 py-4">
                    <div class="form-group">
                        <input type="text" class="form-control m-1" name="code" autocomplete="off"
                            placeholder="Subject Code" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control m-1" name="description" autocomplete="off"
                            placeholder="Description" required>
                    </div>

                    <div class="form-group">
                        <select name="labstatus"  class="form-control m-1" required>
                            <option selected disabled>Choose Laboratory Status</option>
                            <option value="0">No Laboratory</option>
                            <option value="1">With Laboratory</option>
                        </select>
                        <span class="form-text small text-muted">
                            Lab Status: Indicates if the subject has a laboratory component.
                        </span>
                    </div>

                    <div class="form-group">
                        <select name="type"  class="form-control m-1" required>
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
                    <button class="btn btn-sm btn-outline-primary" type="submit" >Add</button>
                </div>

            </form>
        </div>
    </div>
</div>
