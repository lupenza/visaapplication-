@extends('backend.layouts.main')
@section('content')
<style>
    .table th{
        background-color: aliceblue
    }
    .mainTaskContainer{
        border-left: 3px solid #20BFE9 !important;
        border-bottom: 0.5px solid black;
        margin-bottom: 15px
    }
    .taskContainer{
        display: flex;;
        flex-direction: row;
        gap: 40px;
        margin-bottom: 0px;
        padding: 0;
        /* background-color: blue */
    }
    .taskContainer h5{
        padding: 0px;
        font-size: 15px;
        font-weight: bold;
    }
    .taskContainer p{
        padding: 0px
    }
    .taskContainer2{
        display: flex;
        flex-direction: row;
        justify-content: space-between
    }
    .subTaskContainer{
        display: flex;
        flex-direction: row;
        gap: 20px
    }

    .subTaskContainer h5{
        padding: 0px;
        font-size: 15px;
        font-weight: bold;
    }
    .subTaskContainer  p{
        padding: 0px
    }
</style>
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Application Profile</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                        <li class="breadcrumb-item active">Application Profile </li>
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
                    <h4 class="card-title text-center" >Application Profile ({{ $profile->visa_type?->name }})</h4>
                    {{-- <div class="card">
                        <div class="card-body"> --}}
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">Application Profile</span> 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">Task Track</span> 
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="home1" role="tabpanel">
                                    <div class="table-responsive">
                                       <table class="table">
                                        <tbody>
                                            {{-- @foreach ($profile->question_answers as $data)
                                                <tr>
                                                    <th>{{ $data->question?->name}}</th>
                                                    <td>{{ $data->answer }}</td>
                                                </tr>   
                                            @endforeach --}}
                                            @foreach ($profile->question_answers->chunk(2) as $dataChunk)
                                            <tr>
                                                @foreach ($dataChunk as $data)
                                                    <th>{{ $data->question?->name }}</th>
                                                    <td>{{ $data->answer }}</td>
                                                @endforeach
                                            </tr>   
                                            @endforeach
                                        </tbody>
                                       </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile1" role="tabpanel">
                                    <div class="table-responsive">
                                        @forelse ($profile->task_tracks as $track)
                                        <div class="row">
                                        <div class="col-md-12 mainTaskContainer">
                                            <div class='taskContainer'>
                                                <div>
                                                  <h5>Attendee</h5>
                                                </div>
                                                <div>
                                                    <p>{{ $track->user?->name}}</p>
                                                </div>
                                            </div>
                                            <div class='taskContainer'>
                                                <div>
                                                  <h5>Comment</h5>
                                                </div>
                                                <div>
                                                    <p>{{ $track->comment }}</p>
                                                </div>
                                            </div>
                                            <div class='taskContainer'>
                                                <div>
                                                  <h5>Status</h5>
                                                </div>
                                                <div>
                                                    <p>{{ $track->status == 1 ? "Attended" : "Not Attended" }}</p>
                                                </div>
                                            </div>
                                            <div class='taskContainer'>
                                                <div>
                                                  <h5>Action</h5>
                                                </div>
                                                <div>
                                                    <p>{{ $track->action}}</p>
                                                </div>
                                            </div>
                                            <div class='taskContainer2'>
                                                <div class="subTaskContainer">
                                                    <h5>Received Date</h5>
                                                    <p>{{ $track->received_date }}</p>
                                                </div>
                                                <div class="subTaskContainer">
                                                    <h5>Forward Date</h5>
                                                    <p>{{ $track->forward_date }}</p>
                                                </div>
                                            </div>
                                        </div> 

                                       </div>    
                                        @empty
                                            
                                        @endforelse
                                        @if ($profile->active_track)
                                        @include('backend.applications.includes.track_add',['track_id'=>$profile->active_track->id])
                                        @endif
                                       
                                    </div>
                                </div>
                            </div>

                        {{-- </div>
                    </div> --}}
                  
                   

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container-fluid -->
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
      url:"{{ route('track.store')}}",
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
                $('#reg_btn').html('<i class="fa fa-save"></i> Submit');
                $('#reg_btn').attr('disabled', false);
              }
      });
  });
  });
</script>
    
@endpush
