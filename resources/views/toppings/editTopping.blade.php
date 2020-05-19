<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
      </div>
      <div class="modal-body">
            <form data-toggle="validator" action="/item-ajax/14" method="put">
                <div class="form-group">
                    <label class="control-label" for="title">Title:</label>
                    <input type="text" name="title" class="form-control" data-error="Please enter title." required />
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="title">Image:</label>
                    <input type="text" name="image" class="form-control" data-error="Please enter image." required />
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="title">Description:</label>
                    <input type="text" name="description" class="form-control" data-error="Please enter description." required />
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>