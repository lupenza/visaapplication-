<form id="allocate-form">
    <div class="form-group row">
        <div class="col-md-4">
            <label for="">Data Entry</label>
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">Please select User</option>
                @foreach ($users as $user)
                  <option value="{{ $user->id}}">{{ $user->name}}</option>  
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label for="">Comment</label>
            <input type="text" name="comment" id="comment" class="form-control" id="" required>
        </div>
        <div class="col-md-4">
            <button id="allocate-btn" type="submit" class="btn btn-primary btn-sm mt-4"><i class="fa fa-plus"></i> Assign  </button>
        </div>
    </div>
    <div class="row">
        <div id="allocate_alert" class="col-md-12"></div>
    </div>
</form>
