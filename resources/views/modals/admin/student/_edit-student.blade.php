<div class="modal fade" id="editStudent" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-light" id="exampleModalLabel">Edit Student Info</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form id="studentUpdate" method="post">
                @method('PUT')
                @csrf
                <div class="modal-body p-5">
                    <div class="form-group d-flex" >
                        <label for="studentid" style="width: 20%; padding:1px" class="my-1">Student ID</label>
                        <input type="text" class="form-control" name="studentid" autocomplete="off" id="edit-id" disabled>
                    </div>


                    <div class="form-group d-flex" >
                        <label for="studentid" style="width: 20%;" class="my-1">Student Name</label>
                            <input type="text" class="form-control" name="name" autocomplete="off"  id="edit-name" required>
                    </div>
                    <!-- end student id -->

                    <!-- selection for gender -->
                    <div class="form-group d-flex">
                        <label for="contact" style="width: 40%; padding:1px">Contact
                            <input type="tel" class="form-control" name="contact" autocomplete="off" pattern="[0-9]{11}" id="edit-contact" required>
                        </label>

                        <label for="studentgender" style="width: 20%; padding:1px">Sex
                            <select name="gender" id="edit-gender" class="form-control" required>
                                <option value="male">M</option>
                                <option value="female">F</option>
                            </select>
                        </label>

                        <label for="bday" style="width: 40%; padding:1px">Birthdate
                            <input type="date" class="form-control" name="bday" id="edit-bday" autocomplete="off" required>
                        </label>
                    </div>
                    <!-- end of selection gender -->

                    <!-- text box contact-->
                    <div class="form-group d-flex">
                        <label for="bplace" style="width: 100%; padding:1px">Birthplace
                            <textarea type="text" class="form-control w-100" name="bplace" autocomplete="off" id="edit-bplace" required></textarea>
                        </label>


                    </div>
                    <!-- text box address -->
                    <div class="form-group">
                        <label for="address" style="width: 100%; padding:1px">Address
                            <textarea type="text" class="form-control" name="address" autocomplete="off" id="edit-address" required></textarea>
                        </label>
                    </div>
                    <!-- end address -->
                    <!-- selection of course -->
                    <div class="form-group d-flex">
                       <label for="course" style="width: 70%; padding:1px"> Program
                        <select name="course" id="edit-course" class="form-control" required>
                            <option selected disabled value="">Choose...</option>
                            @foreach ($programs as $program)
                            <option value="{{ $program->id }}">{{ $program->description }}</option>
                            @endforeach
                        </select>
                        </label>

                        <label for="year" style="width: 20%; padding:1px">Year Level
                        <select name="year" class="form-control" id="edit-year" required>
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                                <option value="3">3rd</option>
                                <option value="4">4th</option>
                            </select>
                        </label>

                        <label for="status" style="width: 30%; padding:1px">Status
                            <select name="status" class="form-control" id="edit-status" required>
                                <option value="0">Regular</option>
                                <option value="1">Irregular</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-outline-success" onclick="document.getElementById('studentUpdate').submit()">Update</button>
                </div>

            </form>
        </div>
    </div>
</div>
