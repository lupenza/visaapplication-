@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Visa Application</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">List</a></li>
                        <li class="breadcrumb-item active">Visa Application List</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-12" id="allocate_alert">  

        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body ">
                    <h4 class="card-title text-center" >Application</h4>
                    <div style="display: flex; flex-direction: row; justify-content:flex-end; padding: 5px 0px 5px 0px">
                        <div class="dropdown mt-4 mt-sm-0">
                            <a href="#" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Visa Application <i class="mdi mdi-chevron-down"></i>
                            </a>

                            <div class="dropdown-menu">
                                @foreach ($visa_types as $item)
                                <a class="dropdown-item" href="{{ route('application.create',$item->id)}}">{{ $item->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                    @include('backend.applications.includes.assign_application')
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th>Created At</th>
                                <th>Name</th>
                                <th>Visa Type</th>
                                <th>Stage</th>
                                <th>Allocated To</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($applications as $application)
                                    <tr>
                                        <td id="{{ $application->id }}"><input type="checkbox" class="select-item checkbox" name="select-item" value="{{ $application->id }}" /></td>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $application->created_at}} </td>
                                        <td>{{ $application->applicant?->name }}</td>
                                        <td>{{ $application->visa_type?->name }}</td>
                                        <td>{!! $application->stage_formatted !!}</td>
                                        <td>{{ $application->allocated_user?->name }}</td>
                                        <td>
                                            <a href="{{ route('visa.profile',['uuid'=>$application->uuid])}}">
                                                <button class="btn btn-primary btn-sm" ><i class="fa fa-user"></i></button>
                                            </a>
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
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
      $('#allocate-form').on('submit',function(e){
          e.preventDefault();
          var user_id   =$('#user_id').val();
          var comment   =$('#comment').val();

          var checkboxValues = [];
          $('input.select-item:checked').map(function() {
              checkboxValues.push($(this).val());
          });

          $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
          });
      $.ajax({
      type:'POST',
      url:"{{ route('allocate.application')}}",
      data:{application:checkboxValues,user_id:user_id,comment:comment},
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

    
@endpush