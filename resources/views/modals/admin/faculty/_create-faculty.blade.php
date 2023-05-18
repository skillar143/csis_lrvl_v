<div class="modal fade" id="AddfacultyModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">Add New Teacher</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form action="{{ route('faculty.store') }}" method="post">
                @csrf
                <div class="modal-body p-5">
                    <!-- text box teacher id -->
                    <div class="form-group d-flex" >
                        <label for="teacherid" style="width: 20%; padding:1px">Teacher ID</label>
                        <input type="text" class="form-control" name="teacherid" id="teacherid" autocomplete="off"  required>
                    </div>

                    <div class="form-group d-flex" >
                        <label for="name" style="width: 15%;" class="m-1">Teacher Name</label>
                            <input type="text" class="form-control m-1" style="width: 30%;"name="fn" id="name" autocomplete="off" placeholder="First Name" required>
                            <input type="text" class="form-control m-1" style="width: 20%;" name="mi" autocomplete="off" placeholder="Middle Initial" required>
                            <input type="text" class="form-control m-1" style="width: 30%;"name="ln" autocomplete="off" placeholder="Last Name" required>
                    </div>
                    <!-- end teacher id -->

                    <!-- selection for gender -->
                    <div class="form-group d-flex">
                        <label for="contact" style="padding:1px" class="m-1 mr-5">Contact</label>
                        <input type="tel" style="width: 30%; padding:1px" class="form-control ml-3 mr-5" id="contact" name="contact" autocomplete="off" pattern="[0-9]{11}" required>

                        <label for="teachergender" style="padding:1px" class="m-1 mr-5">Sex</label>
                            <select name="gender" id="teachergender" style="width: 30%; padding:1px" class="form-control " required>
                                <option selected disabled>Choose...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                    </div>
                    <!-- end of selection gender -->

                    <!-- text box contact-->
                   
                    <!-- text box address -->
                    <div class="form-group">
                        <label for="address" style="width: 100%; padding:1px">Address
                            <textarea type="text" class="form-control" name="address" id="address" autocomplete="off" required></textarea>
                        </label>
                    </div>
                    <!-- end address -->

                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-outline-primary" type="submit" name="ok">Add</button>
                </div>

            </form>
        </div>
    </div>
</div>
