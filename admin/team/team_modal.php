<!-- Add -->
<div class="modal fade" id="addnew">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Add New team</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="team_add.php" enctype="multipart/form-data">

          <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="name" required>
            </div>
          </div>

          <div class="form-group">
            <label for="photo" class="col-sm-3 control-label">Photo</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" name="photo" required>
            </div>
          </div>


          <div class="form-group">
            <label for="profession" class="col-sm-3 control-label">Profession</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="profession" required>
            </div>
          </div>
          <div class="form-group">
            <label for="team_social_media1" class="col-sm-3 control-label">Type Social Media-1
            </label>
            <div class="col-sm-9">
              <select name="team_social_media1" class="form-control">
                <option value="">Select Type</option>
                <option value="facebook">FaceBook</option>
                <option value="instagram">Instagram</option>
                <option value="twitter">Twitter</option>
                <option value="linkedin">Linkedin</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="team_social_media1_link" class="col-sm-3 control-label">Social media1 link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="team_social_media1_link" required>
            </div>
          </div>

          <div class="form-group">
            <label for="team_social_media2" class="col-sm-3 control-label">Type Social Media-2
            </label>
            <div class="col-sm-9">
              <select name="team_social_media2" class="form-control">
                <option value="">Select Type</option>
                <option value="facebook">FaceBook</option>
                <option value="instagram">Instagram</option>
                <option value="twitter">Twitter</option>
                <option value="linkedin">Linkedin</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="team_social_media2_link" class="col-sm-3 control-label">Social media2 link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="team_social_media2_link">
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Add</button>
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
        <h4 class="modal-title"><b>Edit team</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="team_edit.php">
          <input type="hidden" class="edit_team_id" name="id">

          <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_team_name" name="name" required>
            </div>
          </div>

             <div class="form-group">
            <label for="edit_team_profession" class="col-sm-3 control-label">Profession</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_team_profession" name="profession" required>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_team_social_media1" class="col-sm-3 control-label">Type Social Media-1
            </label>
            <div class="col-sm-9">
            <span id="edit_team_social_media1"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_team_social_media1_link" class="col-sm-3 control-label">Social media1 link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_team_social_media1_link" name="team_social_media1_link" required>
            </div>
          </div>

          <div class="form-group">
            <label for="edit_team_social_media2" class="col-sm-3 control-label">Type Social Media-2
            </label>
            <div class="col-sm-9">
            <span id="edit_team_social_media2"></span>
            </div>
          </div>

          <div class="form-group">
            <label for="edit_team_social_media2_link" class="col-sm-3 control-label">Social media2 link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_team_social_media2_link" name="team_social_media2_link">
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
        <form class="form-horizontal" method="POST" action="team_delete.php">
          <input type="hidden" class="del_team_id" name="id">
          <div class="text-center">
            <p>DELETE TEAM</p>
            <h2 class="bold del_team_name"></h2>
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
        <h4 class="modal-title"><b><span class="edit_team_name"></span></b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="team_photo.php" enctype="multipart/form-data">
          <input type="hidden" class="edit_photo_id" name="id">
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

<!-- view  more -->
<div class="modal fade" id="view_more">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>view more...</b></h4>
      </div>
      <form class="form-horizontal">
        <div class="modal-body">
          <div class="form-group">
            <label class="col-sm-4 control-label">Social Media 1:</label>
            <div class="col-sm-8">
              <p id="view_team_social_media1"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Social Media 1 link:</label>
            <div class="col-sm-8">
              <p id="view_team_social_media1_link"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Social Media 2:</label>
            <div class="col-sm-8">
              <p id="view_team_social_media2"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Social Media 2 link:</label>
            <div class="col-sm-8">
              <p id="view_team_social_media2_link"></p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        </div>
      </form>
    </div>
  </div>
</div>