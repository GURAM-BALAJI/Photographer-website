<!-- Add -->
<div class="modal fade" id="addnew">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Add New Video Link</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="video_gallery_add.php">
          <div class="form-group">
            <label for="link" class="col-sm-3 control-label">Youtube Link</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="link" name="link" required>
            </div><br>
          </div>
          <div class="form-group">
            <label for="video_gallery_name" class="col-sm-3 control-label">Video Name</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" name="video_gallery_name">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-9">
              <b>NOTE:</b><br>
              * https://www.youtube.com/watch?v=<spam style="color:red">5P6O1oT8Mz8</spam></br>
              * Copy and past only red colred text in youtube link field.
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
        <h4 class="modal-title"><b>Edit Video Link</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="video_gallery_edit.php">
          <input type="hidden" class="catid" name="id">
          <div class="form-group">
            <label for="edit_link" class="col-sm-3 control-label">Video Link</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_link" name="link">
            </div>
          </div>
          <div class="form-group">
            <label for="edit_video_gallery_name" class="col-sm-3 control-label">Video Name</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_video_gallery_name" name="video_gallery_name">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-9">
              <b>NOTE:</b><br>
              * https://www.youtube.com/watch?v=<spam style="color:red">5P6O1oT8Mz8</spam></br>
              * Copy and past only red colred text in youtube link field.
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
        <form class="form-horizontal" method="POST" action="video_gallery_delete.php">
          <input type="hidden" class="catid" name="id">
          <div class="text-center">
            <p>DELETE VIDEO</p>
            <h2 class="bold catlink"></h2>
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