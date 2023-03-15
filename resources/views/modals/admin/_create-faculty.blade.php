<div class="modal fade" id="AddfacultyModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">Add New Teacher</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form action="#" method="post">
                @csrf
                <div class="modal-body">
                    <!-- text box teacher id -->
                    <div class="form-group d-flex" >
                        <label for="studentid" style="width: 20%; padding:1px">Teacher ID</label>
                        <input type="text" class="form-control" name="studentid" autocomplete="off"  required>
                    </div>

                    <div class="form-group d-flex" >
                        <label for="studentid" style="width: 15%;" class="m-1">Teacher Name</label>
                            <input type="text" class="form-control m-1" style="width: 30%;"name="fn" autocomplete="off" placeholder="First Name" required>
                            <input type="text" class="form-control m-1" style="width: 25%;" name="mi" autocomplete="off" placeholder="Middle Initial" required>
                            <input type="text" class="form-control m-1" style="width: 30%;"name="ln" autocomplete="off" placeholder="Last Name" required>
                    </div>
                    <!-- end teacher id -->

                    <!-- selection for gender -->
                    <div class="form-group d-flex">
                        <label for="contact" style="width: 40%; padding:1px">Contact
                            <input type="tel" class="form-control" name="contact" autocomplete="off" pattern="[0-9]{11}" required>
                        </label>

                        <label for="gender" style="width: 20%; padding:1px">Sex
                            <select name="gender" id="gender" class="form-control " required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </label>

                        <label for="bday" style="width: 40%; padding:1px">Birthdate
                            <input type="date" class="form-control" name="bday" autocomplete="off" required>
                        </label>
                    </div>
                    <!-- end of selection gender -->

                    <!-- text box contact-->
                    <div class="form-group d-flex">
                        <label for="bplace" style="width: 100%; padding:1px">Birthplace
                            <textarea type="text" class="form-control w-100" name="bplace" autocomplete="off" required></textarea>
                        </label>


                    </div>
                    <!-- text box address -->
                    <div class="form-group">
                        <label for="address" style="width: 100%; padding:1px">Address
                            <textarea type="text" class="form-control" name="address" autocomplete="off" required></textarea>
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
