<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Register New member</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="members_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                </div>
			    <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
					</div>
					 <div class="form-group">
                    <label for="othername" class="col-sm-3 control-label">Othername</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="othername" name="othername" required>
                    </div>
                </div>
				 
				 <div class="form-group">
                    <label for="status" class="col-sm-3 control-label">Status</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="status" name="status" required>
                    </div>
                </div>
				 <div class="form-group">
                    <label for="state" class="col-sm-3 control-label">State</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="state" name="state" required>
                    </div>
                </div>
				 <div class="form-group">
                    <label for="phone_no" class="col-sm-3 control-label">Phone Number</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="phone_no" name="phobe_no" required>
                    </div>
                </div>
				 <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                </div>
				 <div class="form-group">
                    <label for="emai" class="col-sm-3 control-label">Email Address</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                </div>
				 <div class="form-group">
                    <label for="wing" class="col-sm-3 control-label">Wing</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="wing" name="wing" required>
                    </div>
                </div>
				 <div class="form-group">
                    <label for="year_entry" class="col-sm-3 control-label">Year of Entry</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="year_entry" name="year_entry" required>
                    </div>
                </div>
				 <div class="form-group">
                    <label for="institution" class="col-sm-3 control-label">Institution</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="institution" name="institution" required>
                    </div>
                </div>
				 
         
				<div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Position/Office</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="position" name="position" required>
                    </div>
                </div>
				
				
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Member</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="edit_member.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>
				 <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Department</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_department" name="department">
                    </div>
                </div>
				 <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Level</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_level" name="level">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="edit_password" name="password">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="delete_member.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE MEMBER</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="member_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


     