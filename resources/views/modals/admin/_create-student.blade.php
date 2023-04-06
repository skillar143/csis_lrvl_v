<div class="modal fade" id="AddstudentModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">Add New Student</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form action="{{ route('student.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group d-flex" >
                        <label for="studentid" style="width: 20%; padding:1px">Student ID</label>
                        <input type="text" class="form-control" name="studentid" autocomplete="off"  required>
                    </div>


                    <div class="form-group d-flex" >
                        <label for="studentid" style="width: 15%;" class="m-1">Student Name</label>
                            <input type="text" class="form-control m-1" style="width: 30%;"name="fn" autocomplete="off" placeholder="First Name" required>
                            <input type="text" class="form-control m-1" style="width: 25%;" name="mi" autocomplete="off" placeholder="Middle Initial" required>
                            <input type="text" class="form-control m-1" style="width: 30%;"name="ln" autocomplete="off" placeholder="Last Name" required>
                    </div>
                    <!-- end student id -->

                    <!-- selection for gender -->
                    <div class="form-group d-flex">
                        <label for="contact" style="width: 40%; padding:1px">Contact
                            <input type="tel" class="form-control" name="contact" autocomplete="off" pattern="[0-9]{11}" required>
                        </label>

                        <label for="gender" style="width: 20%; padding:1px">Sex
                            <select name="gender" id="gender" class="form-control " required>
                                <option value="male">M</option>
                                <option value="female">F</option>
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
                    <!-- selection of course -->
                    <div class="form-group d-flex">
                       <label for="course" style="width: 70%; padding:1px"> Program
                        <select name="course" id="c" class="form-control" required>
                            <option selected disabled value="">Choose...</option>
                            @foreach ($programs as $program)
                            <option value="{{ $program->id }}">{{ $program->description }}</option>
                            @endforeach
                        </select>
                        </label>

                        <label for="year" style="width: 20%; padding:1px">Year Level
                        <select name="year" class="form-control" required>
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                                <option value="3">3rd</option>
                                <option value="4">4th</option>
                            </select>
                        </label>

                        <label for="status" style="width: 30%; padding:1px">Status
                            <select name="status" id="c" class="form-control" required>
                                <option value="1">Regular</option>
                                <option value="2">Irregular</option>
                            </select>
                        </label>
                    </div>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-outline-primary" type="submit">Add</button>
                </div>

            </form>
        </div>
    </div>
</div>
