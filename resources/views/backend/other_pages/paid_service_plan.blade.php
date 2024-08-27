@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Paid Service Plans</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">List</a></li>
                        <li class="breadcrumb-item active">Paid Service Plans List</li>
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
                    <h4 class="card-title text-center" >Paid Service Plans</h4>
                    <div style="display: flex; flex-direction: row; justify-content:flex-end; padding: 5px 0px 5px 0px">
                        <button class="btn btn-primary btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal"> <span class="fa fa-plus font-size-15"></span> Add Plan</button>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Created At</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Price Plan</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $item)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $item->created_at}} </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->offers }}</td>
                                        <td>
                                            <a href="{{ route('paid.service.questions.index',$item->uuid)}}">
                                                <button class="btn btn-primary btn"> <i class="fa fa-arrow-right"></i> Questions</button>
                                            </a>
                                        </td>
                                        <td>
                                            <button title="Edit" class="btn btn-primary btn-sm waves-effect waves-light edit-btn" data-bs-toggle="modal" data-bs-target="#editmyModal" data-name="{{ $item->name }}" data-price="{{ $item->price }}" data-description="{{ $item->offers }}" data-visa_id="{{ $item->uuid}}"> <span class="fa fa-edit"></span></button>
                                            @if ($item->id == 1)
                                            <button class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></button>
                                            @else
                                            <button class="btn btn-danger btn-sm" id="{{ $item->id }}" onclick="deleteCategory(id)" title="Delete"><i class="fa fa-trash"></i></button>
                                            @endif
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
                <h5 class="modal-title" id="myModalLabel">Register Paid Service Plan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form id="registration_form">
                <input type="hidden" name="paid_service_uuid" value={{$paid_service_uuid}}>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Write Name....." required>
                    </div>
                    <div class="col-md-12">
                        <label for="Name">Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Write Price.....">
                    </div>
                    <div class="col-md-12">
                        <label for="Name">Description (What we Offer) <sub> (separate by comma (,))</sub></label>
                        <textarea name="offers" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-12" style="margin-top: 5px" id="alert">
                    </div>
                    <div class="col-md-12">
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
 <div id="editmyModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Edit Paid Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form id="registration_form_2">
                <input type="hidden" name="uuid" id="uuid">
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Write Visa Name....." required>
                    </div>
                    <div class="col-md-12">
                        <label for="Name">Price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="col-md-12">
                        <label for="Name">Description (What we Offer) <sub> (separate by comma (,))</sub></label>
                        <textarea name="offers" class="form-control" id="description" required></textarea>
                    </div>
                    <div class="col-md-12" style="margin-top: 5px" id="alert_2">
                    </div>
                    <div class="col-md-12">
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
      url:"{{ route('paid.service.plan.store')}}",
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

  function deleteCategory(id){
        Swal.fire({
            title: "Delete Paid Service Plan ?",
            text: "Are you Sure You want to delete this Paid Service Plan !",
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
                        url: "{{ route('paid.service.plan.destroy')}}", 
                        method: "POST",
                        data: {id:id,'_token':csrf_tokken,action:'approve'},
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
                        Swal.fire({ title: "Deleted!", text: response.responseJson.errors, icon: "warning" })

                         console.log(response.responseText);
                         //   $.notify(response.responseJson.errors,'error');  
                        }
                    });
            }
        });
  }

  
</script>
<script>
    $('.edit-btn').on('click',function(){
        var name =$(this).data('name');
        var description =$(this).data('description');
        var price =$(this).data('price');
        var uuid =$(this).data('visa_id');

        $('#name').val(name);
        $('#description').val(description);
        $('#price').val(price);
        $('#uuid').val(uuid);
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
      url:"{{ route('paid.service.plan.update')}}",
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
                $('#reg_btn_2').html('<i class="fa fa-save"></i> Edit');
                $('#reg_btn_2').attr('disabled', false);
              }
      });
  });
  });
</script>
@endpush