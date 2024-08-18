<form id="registration_form">
    <div class="form-group row">
        <input type="hidden" value="{{ $track_id}}" name="track_id">
        <div class="col-md-12 mt-2">
            <label for="">Action</label>
            <select name="action" class="form-control" required>
                <option value="" >please select action</option>
                <option value="Forward">Forward</option>
                <option value="Reverse">Reverse</option>
                <option value="Approve">Approve</option>
            </select>
        </div>
        <div class="col-md-12 mt-2">
            <label for="">Comment</label>
            <textarea name="comment" class="form-control" required></textarea>
        </div>
        <div class="col-md-12" id="alert"></div>
        <div class="col-md-12 mt-3 text-center">
            <button class="btn btn-primary w-50" id="reg-btn"><i class="fa fa-save"></i> Submit</button>
        </div>
    </div>
</form>