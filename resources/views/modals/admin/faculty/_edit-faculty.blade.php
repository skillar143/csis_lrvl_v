<div class="modal fade" id="editFaculty" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-light" id="exampleModalLabel">Edit Teacher Info</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form id="facultyUpdate" method="post">
            @method('PUT')
            @csrf
                <div class="modal-body py-4 px-5">
                    <!-- text box teacher id -->
                    <div class="form-group d-flex" >
                        <label for="eteacherid" style="width: 30%; padding:1px">Teacher ID</label>
                        <input type="text" class="form-control" name="teacherid" autocomplete="off" id="eteacherid" required>
                    </div>

                    <div class="form-group d-flex" >
                        <label for="ename" style="width: 30%; " class=" ">Teacher Name</label>
                            <input type="text" class="form-control " style="width: *%;" name="name" autocomplete="off" id="ename" required>
                    </div>
                    <!-- end teacher id -->

                    <!-- selection for gender -->
                    <div class="form-group d-flex">
                        <label for="enumber" style="padding: 1px" class="m-1">Contact</label>
                            <input type="tel" style="width: 40%; " class="form-control" name="contact" autocomplete="off" pattern="[0-9]{11}" id="enumber" required>
                        
                        <label for="egender" style="padding: 1px" class=" ml-5 m-1">Sex</label>
                            <select name="gender" id="egender" style="width: 20%; padding:1px" class="form-control " required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>

                    </div>
                    <!-- text box address -->
                    <div class="form-group">
                        <label for="eaddress" style="width: 100%; padding:1px">Address
                            <textarea type="text" class="form-control" name="address" autocomplete="off" id="eaddress" required></textarea>
                        </label>
                    </div>
                    <!-- end address -->

                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-outline-success" onclick="document.getElementById('facultyUpdate').submit()">Update</button>
                </div>

            </form>
        </div>
    </div>
</div>
