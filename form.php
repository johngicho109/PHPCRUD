<div class="modal fade" id="usermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adding/Updating Users</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal Form Body -->
                <form action="" id="addform" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <!-- Username Field -->
                        <div class="form-group">
                            <label for="">Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark">
                                        <i class="fas fa-user-alt text-light"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="username"placeholder="Enter user" autocomplete="off" required="required" name="username">
                            </div>
                        </div>
                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark">
                                        <i class="fas fa-envelope-open text-light"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" id="email"placeholder="Enter Email" autocomplete="off" required="required" name="email">
                            </div>
                        </div>
                        <!-- Mobile Field -->
                        <div class="form-group">
                            <label for="">Mobile</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark">
                                        <i class="fas fa-phone text-light"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="mobile"placeholder="Enter Phone Number" autocomplete="off" required="required" name="mobile">
                            </div>
                        </div>
                        <!-- Photo Field -->
                        <div class="form-group">
                            <label for="">Photo</label>
                            <div class="input-group">
                                <label class="custom-file-label" for="userphoto">Choose File</label>
                                <input type="file" class="custom-file-input" name="photo" id="userphoto" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bg-dark text-light">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <!-- Two inputs fields -->
                        <!-- One for adding new users -->
                        <input type="hidden" name="action" value="adduser">
                        <!-- The other one for updating or deleting or viewing users -->
                        <input type="hidden" name="userId" id="userId" value="">
                    </div>
                </form>
                <!-- End Modal Form Body -->
            </div>
        </div>
    </div>