@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Testmonial</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Add</a></li>
                        <li class="breadcrumb-item active">Testmonial List</li>
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
                    <h4 class="card-title text-center" >Add Testmonial</h4>
                    <form action="" id="registration_form" >
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Write name ...." required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Designation</label>
                                <input type="text" name="designation" class="form-control" placeholder="Write designation...." required>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <div class="col-md-12">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" placeholder="Write Program Short Description...."></textarea>
                            </div>
                        </div>
                        <div class="from-group row mt-2">
                            <div class="col-md-12">
                                <label for="">User Image</label>
                                <input type="file" name="image"  id="image"  class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <div class="col-md-12" id="alert"></div>
                        </div>
                        <div class="form-group row mt-2">
                            <div class="col-md-12">
                                <button id="reg_btn" class="btn btn-primary btn-round w-100"> <i class="fa fa-save"></i> Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container-fluid -->
@endsection
@push('scripts')
<script src="{{ asset('assets/backend/ckeditor/ckeditor.js') }}"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
     // Register FilePond plugins
  FilePond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginFileValidateSize,
    FilePondPluginImageExifOrientation,
    FilePondPluginImageEdit
  );

  // Turn all file input elements into ponds
  FilePond.parse(document.body);
  const inputElement = document.querySelectorAll('#image,#cover');
    const pond = FilePond.create(inputElement, {
        acceptedFileTypes: ['image/*'],
        allowMultiple: true,
        server: {
            process: '{{ route('upload') }}',
            revert: '{{ route('revert') }}',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }
    });
</script>
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
      url:"{{ route('testmonials.store')}}",
      data : new FormData(this),
      contentType: false,
      cache: false,
      processData : false,
      success:function(response){
        console.log(response);
        $('#alert').html('<div class="alert alert-success">'+response.message+'</div>');
        setTimeout(function(){
         window.location.href ="{{ route('testmonials.index')}}";
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
</script>
@endpush
