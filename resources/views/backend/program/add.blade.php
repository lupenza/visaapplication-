@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Program</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">List</a></li>
                        <li class="breadcrumb-item active">Program List</li>
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
                    <h4 class="card-title text-center" >Add Programs</h4>
                    <form action="" id="registration_form" >
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="">Program Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Write Progran name ...." required>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <div class="col-md-6">
                                <label for="">Program Category</label>
                                <select name="category_id" class="form-control" required>
                                    <option value="" selected>Please choose category</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id}}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Price</label>
                                <input type="number" name="price" class="form-control" required>
                            </div>

                        </div>
                        <div class="form-group row mt-2">
                            <div class="col-md-12">
                                <label for="">Caption</label>
                                <textarea name="caption" class="form-control" placeholder="Write Program Short Description...."></textarea>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <div class="col-md-12">
                                <label for="">Full Program Description</label>
                                {{-- <div id="editor"></div> --}}
                                <textarea name="description" id="editor"></textarea>
                            </div>
                        </div>
                        <div class="from-group row mt-2">
                            <div class="col-md-12">
                                <label for="">Cover Images <sub class="text-danger">Max 2 Images</sub> </label>
                                <input type="file" name="cover[]" class="form-control"   id="cover" multiple/>
                            </div>
                        </div>
                        <div class="from-group row mt-2">
                            <div class="col-md-12">
                                <label for="">Programs Images </label>
                                <input type="file" class="form-control" name="images[]"  id="image"  multiple/>
                            </div>
                        </div>
                        <div class="from-group row mt-2">
                            <div class="col-md-12">
                                <label for="">Programs Package <sub class="text-danger">Zip File</sub></label>
                                <input type="file" class="form-control" name="package"  id="image" required accept="application/zip,application/x-zip-compressed,application/x-compressed"/>
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
      url:"{{ route('programs.store')}}",
      data : new FormData(this),
      contentType: false,
      cache: false,
      processData : false,
      success:function(response){
        console.log(response);
        $('#alert').html('<div class="alert alert-success">'+response.message+'</div>');
        setTimeout(function(){
         window.location.href ="{{ route('programs.index')}}";
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
