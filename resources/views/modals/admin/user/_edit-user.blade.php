<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-light" id="exampleModalLabel">Change User Password</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form id="userUpdate" method="POST">
            @method('PUT')
            @csrf

                <div class="modal-body px-5 py-4">

                    <div class="form-group d-flex">
                        <label for="subcode" style="width: 100%; padding:1px">User ID / Username
                            <input type="text" class="form-control w-100" name="username" autocomplete="off" id="username" required disabled>
                        </label>
                    </div>

                    <div class="form-group d-flex">
                        <label for="subdescription" style="width: 100%; padding:1px">Name
                            <input type="text" class="form-control w-100" name="name" autocomplete="off" id="uname" required disabled>
                        </label>
                    </div>
                    
                    <div class="form-group d-flex">
                        <label for="subdescription" style="width: 100%; padding:1px">New Password
                            <input type="password" class="form-control w-100" name="newPass" autocomplete="off" id="newpass" required>
                            <span class="form-text small text-muted">
                                The password must be 8-20 characters, and must <em>not</em> contain spaces.
                            </span>
                        </label>
                    </div>

                    <div class="form-group d-flex">
                        <label for="subdescription" style="width: 100%; padding:1px">Verify Password
                            <input type="password" class="form-control w-100" name="verifyPass" autocomplete="off" id="newpass" required>
                            <span class="form-text small text-muted">
                            Please confirm your new password by typing it again.
                            </span>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-outline-success" onclick="document.getElementById('userUpdate').submit()">Update</button>
                </div>

            </form>
        </div>
    </div>
</div>







