<form id="allocate-form">
    <div class="form-group row">
        <input type="hidden"  name="visa_type" id="visa_type" value="{{ $visa_type}}">
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
            <textarea name="comment" id="comment" class="form-control" required></textarea>
        </div>
        <div class="col-md-4">
            <button id="allocate-btn" type="submit" class="btn btn-primary btn-sm mt-4"><i class="fa fa-plus"></i> Assign  </button>
        </div>
    </div>
    <div class="row">
        <div id="allocate_alert" class="col-md-12"></div>
    </div>
</form>
{{-- @push('scripts')
<script>
    $(document).ready(function(){
      $('#allocate-form').on('submit',function(e){
          e.preventDefault();
            alert('clicked');
          var user_id   =$('#user_id').val();
          var comment   =$('#comment').val();
          var visa_type =$('#visa_type').val();

          var checkboxValues = [];
          $('input.select-item:checked').map(function() {
              checkboxValues.push($(this).val());
          });

          console.log(checkboxValues);
      
          $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
          });
      $.ajax({
      type:'POST',
      url:"{{ route('allocate.application')}}",
      data:{application:checkboxValues,user_id:user_id,comment:comment,visa_type:visa_type},
      success:function(response){
        console.log(response);
       // return;
        $('#allocate_alert').html('<div class="alert alert-success">'+response.message+'</div>');
        setTimeout(function(){
         location.reload();
      },500);
      },
      error:function(response){
          console.log(response.responseText);
          if (jQuery.type(response.responseJSON.errors) == "object") {
            $('#allocate_alert').html('');
          $.each(response.responseJSON.errors,function(key,value){
              $('#allocate_alert').append('<div class="alert alert-danger">'+value+'</div>');
          });
          } else {
             $('#allocate_alert').html('<div class="alert alert-danger">'+response.responseJSON.errors+'</div>');
          }
      },
      beforeSend : function(){
                   $('#allocate-btn').html('<i class="fa fa-spinner fa-pulse fa-spin"></i> loading ---');
                   $('#allocate-btn').attr('disabled', true);
              },
              complete : function(){
                $('#allocate-btn').html('<i class="fa fa-plus"></i> Assign');
                $('#allocate-btn').attr('disabled', false);
              }
      });
  });
  });
</script>

    
@endpush --}}