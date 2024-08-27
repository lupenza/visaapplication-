@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Questions</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">List</a></li>
                        <li class="breadcrumb-item active">Questions List</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body ">
                    <h4 class="card-title text-center" >Questions</h4>
                    <div style="display: flex; flex-direction: row; justify-content:flex-end; padding: 5px 0px 5px 0px">
                        <button class="btn btn-primary btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal"> <span class="fa fa-plus font-size-15"></span> Add Question</button>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th> 
                                <th>Name</th>
                                <th>Rule</th>
                                <th>Input Type</th>
                                <th>Arrangement</th>
                                <th>Select Options</th>
                                <th>Section</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($questions as $item)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td> 
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->rule == 1 ? "Yes" :"No" }}</td>
                                        <td>{{ $item->input_type }}</td>
                                        <td>{{ $item->arrangement }}</td> 
                                        <td>{{ $item->options }}</td>
                                        <td>{{ $item->section }}</td>
                                        <td>{{ $item->created_at}} </td>
                                        <td>
                                            <button title="edit" class="btn btn-primary btn-sm waves-effect waves-light edit-btn" 
                                            data-bs-toggle="modal" data-bs-target="#eidtmyModal"
                                            data-uuid ="{{ $item->uuid}}" data-name="{{ $item->name}}" data-rule={{ $item->rule}}
                                            data-arrangement ="{{$item->arrangement}}" data-options ="{{ $item->options}}" data-section="{{ $item->section}}" data-field_type={{ $item->input_type}}
                                            > <span class="fa fa-edit"></span></button>
                                            <button class="btn btn-danger btn-sm" id="{{ $item->uuid }}" onclick="deleteQuestion(id)" title="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                               
                            </tbody>
                           
                        </table>
                    </div>
                   

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container-fluid -->

 <!-- sample modal content -->
 <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Register Question</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form id="registration_form">
                <input type="hidden" name="visa_type_id" value="{{$visa_type_id}}">
                <div class="form-group row">
                    <div class="col-md-12 mt-2">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Write Question Name....." required>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="Name">Rule (Is it Required ? )</label>
                        <select name="rule" class="form-control" required>
                            <option value="">Please Select</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="Name">Field Type</label>
                        <select name="input" id="field_type" class="form-control" required>
                            <option value="">Please Select</option>
                            <option value="date">date</option>
                            <option value="select">select</option>
                            <option value="number">number</option>
                            <option value="text">text</option>
                            <option value="textarea">text Area</option>
                            <option value="email">Email</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2" style="display: none" id="option">
                        <label for="Name">Options <sub>separate by coma (,)</sub></label>
                        <textarea name="options" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="Name">Arrangement</label>
                        <input type="number" name="arrangement" class="form-control"  required />
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="Name">Section</label>
                        <select name="section" id="section" class="form-control" required>
                            <option value="">Please Select</option>
                            <option value="1">Section 1</option>
                            <option value="2">Section 2</option>
                            <option value="3">Section 3</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2" style="margin-top: 5px" id="alert">
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="mt-2 d-grid">
                            <button class="btn btn-primary waves-effect waves-light"  id="reg_btn" type="submit"> <span class="fas fa-save"></span> Register</button>
                        </div>
                    </div>
                </div>
               </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- sample modal content -->
 <div id="eidtmyModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Edit Question</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form id="registration_form_2">
                <input type="hidden" name="uuid" id="uuid" >
                <div class="form-group row">
                    <div class="col-md-12 mt-2">
                        <label for="Name">Name</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Write Question Name....." required>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="Name">Rule (Is it Required ? )</label>
                        <select name="rule" id="rule" class="form-control" required>
                            <option value="">Please Select</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="Name">Field Type</label>
                        <select name="input" id="field_type" class="form-control field_type" required>
                            <option value="">Please Select</option>
                            <option value="date">date</option>
                            <option value="select">select</option>
                            <option value="number">number</option>
                            <option value="text">text</option>
                            <option value="textarea">text Area</option>
                            <option value="email">Email</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2" id="option">
                        <label for="Name">Options <sub>separate by coma (,)</sub></label>
                        <textarea name="options" id="options_2" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="Name">Arrangement</label>
                        <input type="text" name="arrangement" id="arrangement" class="form-control" required />
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="Name">Section</label>
                        <select name="section" id="section" class="form-control" required>
                            <option value="">Please Select</option>
                            <option value="1">Section 1</option>
                            <option value="2">Section 2</option>
                            <option value="3">Section 3</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2" style="margin-top: 5px" id="alert_2">
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="mt-2 d-grid">
                            <button class="btn btn-primary waves-effect waves-light"  id="reg_btn_2" type="submit"> <span class="fas fa-save"></span> Register</button>
                        </div>
                    </div>
                </div>
               </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
      $('#registration_form').on('submit',function(e){ 
          e.preventDefault();

      $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
          });
      $.ajax({
      type:'POST',
      url:"{{ route('question.store')}}",
      data : new FormData(this),
      contentType: false,
      cache: false,
      processData : false,
      success:function(response){
        console.log(response);
        $('#alert').html('<div class="alert alert-success">'+response.message+'</div>');
        setTimeout(function(){
         location.reload();
      },500);
      },
      error:function(response){
          console.log(response.responseText);
          if (jQuery.type(response.responseJSON.errors) == "object") {
            $('#alert').html('');
          $.each(response.responseJSON.errors,function(key,value){
              $('#alert').append('<div class="alert alert-danger">'+value+'</div>');
          });
          } else {
             $('#alert').html('<div class="alert alert-danger">'+response.responseJSON.errors+'</div>');
          }
      },
      beforeSend : function(){
                   $('#reg_btn').html('<i class="fa fa-spinner fa-pulse fa-spin"></i> loading..........');
                   $('#reg_btn').attr('disabled', true);
              },
              complete : function(){
                $('#reg_btn').html('<i class="fa fa-save"></i> Register');
                $('#reg_btn').attr('disabled', false);
              }
      });
  });
  });

  function deleteQuestion(id){
        Swal.fire({
            title: "Delete Question ?",
            text: "Are you Sure You want to delete this Question !",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete!",
            cancelButtonText: "No, cancel!",
            confirmButtonClass: "btn btn-success mt-2",
            cancelButtonClass: "btn btn-danger ms-2 mt-2",
            buttonsStyling: !1,
        }).then(function (t) {
            if (t.value) {
                var csrf_tokken =$('meta[name="csrf-token"]').attr('content');
                $.ajax({
                        url: "{{ route('question.destroy')}}", 
                        method: "POST",
                        data: {uuid:id,'_token':csrf_tokken,action:'approve'},
                        success: function(response)
                    { 
                    // console.log(response); 
                        // $.notify(response.message, "success");
                        Swal.fire({ title: "Deleted!", text: response.message, icon: "success" })
                        setTimeout(function(){
                            location.reload();
                        },500);
                        },
                        error: function(response){
                            console.log(response.responseText);
                        Swal.fire({ title: "Deleted!", text: response.responseJson.errors, icon: "warning" })

                         console.log(response.responseText);
                         //   $.notify(response.responseJson.errors,'error');  
                        }
                    });
            }
        });
  }

  $('#field_type').on('change',function (){
    var value =$(this).val();

    if (value == 'select') {
        $('#option').show(); 
    } else {
        $('#option').hide(); 
    }
  })

  $('.edit-btn').on('click',function(){
   $('#uuid').val($(this).data('uuid'));
   $('#name').val($(this).data('name'));
   $('#rule').val($(this).data('rule'));
   $('#arrangement').val($(this).data('arrangement'));
   $('#options_2').val($(this).data('options'));
   $('#section').val($(this).data('section'));
   $('#field_type').val($(this).data('field_type'));
  })

  $(document).ready(function(){
      $('#registration_form_2').on('submit',function(e){ 
          e.preventDefault();

      $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
          });
      $.ajax({
      type:'POST',
      url:"{{ route('question.update')}}",
      data : new FormData(this),
      contentType: false,
      cache: false,
      processData : false,
      success:function(response){
        console.log(response);
        $('#alert_2').html('<div class="alert alert-success">'+response.message+'</div>');
        setTimeout(function(){
         location.reload();
      },500);
      },
      error:function(response){
          console.log(response.responseText);
          if (jQuery.type(response.responseJSON.errors) == "object") {
            $('#alert_2').html('');
          $.each(response.responseJSON.errors,function(key,value){
              $('#alert_2').append('<div class="alert alert-danger">'+value+'</div>');
          });
          } else {
             $('#alert_2').html('<div class="alert alert-danger">'+response.responseJSON.errors+'</div>');
          }
      },
      beforeSend : function(){
                   $('#reg_btn_2').html('<i class="fa fa-spinner fa-pulse fa-spin"></i> loading..........');
                   $('#reg_btn_2').attr('disabled', true);
              },
              complete : function(){
                $('#reg_btn_2').html('<i class="fa fa-save"></i> Register');
                $('#reg_btn_2').attr('disabled', false);
              }
      });
  });
  });

  
</script>
@endpush