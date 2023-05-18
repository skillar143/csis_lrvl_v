<div class="modal fade" id="deleteCurr" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-light" id="exampleModalLabel">Delete Curricula</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form id="curriculaDestroy" method="POST">
            @method('DELETE')
            @csrf
            <div class="modal-body px-5" id="subject">
               
               <div class="form-group d-flex">
                   <label for="delcode" style="width: 100%; padding:1px">Subject Code
                       <input type="text" class="form-control w-100" name="delcode" autocomplete="off" id="codedel" disabled required>
                   </label>
               </div>

               <div class="form-group d-flex">
                   <label for="deldesc" style="width: 100%; padding:1px">Subject Description
                       <input type="text" class="form-control w-100" name="deldes" autocomplete="off" id="desdel" disabled required>
                   </label>
               </div>


               Select "Delete" below if you want to delete the subject described.
           </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="document.getElementById('curriculaDestroy').submit()">Delete</button>
                </div>

            </form>
        </div>
    </div>
</div>
