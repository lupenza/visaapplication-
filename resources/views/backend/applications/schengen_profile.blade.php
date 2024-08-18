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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">LiProfilest</a></li>
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
                    <h4 class="card-title text-center" >Application Profile</h4>
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
                                            <tr>
                                                <th>Maritial Status</th>
                                                <td>{{ $profile->maritial_value}}</td>
                                                <th>Gender</th>
                                                <td>{{ $profile->gender = 1 ? "Male" : "Female" }}</td>
                                            </tr>
                                            <tr>
                                                <th>Date of birth</th>
                                                <td>{{ $profile->dob}}</td>
                                                <th>Place of Birth</th>
                                                <td>{{ $profile->place_of_birth}}</td>
                                            </tr>
                                            <tr>
                                                <th>Country of birth</th>
                                                <td>{{ $profile->country_of_birth}}</td>
                                                <th>Current Nationality <sub>By Birth or different</sub></th>
                                                <td>{{ $profile->current_nationality}}</td>
                                            </tr>
                                            <tr>
                                                <th>National Identity Number</th>
                                                <td>{{ $profile->nin}}</td>
                                                <th>Type of Travel Document</th>
                                                <td>{{ $profile->additional_information?->travel_document}}</td>
                                            </tr>
                                            <tr>
                                                <th>Number of travel document</th>
                                                <td>{{ $profile->additional_information?->no_of_travel_document}}</td>
                                                <th>Date of Issue</th>
                                                <td>{{ $profile->additional_information?->date_issue}}</td>
                                            </tr>
                                            <tr>
                                                <th>Valid Until</th>
                                                <td>{{ $profile->additional_information?->validity}}</td>
                                                <th>Issued By</th>
                                                <td>{{ $profile->additional_information?->issued_by}}</td>
                                            </tr>
                                            <tr>
                                                <th>Home Address</th>
                                                <td>{{ $profile->home_address}}</td>
                                                <th>Email</th>
                                                <td>{{ $profile->email}}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone Number</th>
                                                <td>{{ $profile->phone_number}}</td>
                                                <th>Residence in a country other than the country of current nationality</th>
                                                <td>{{ $profile->other_residence == 1 ? "Yes" : "No"}}</td>
                                            </tr>
                                            <tr>
                                                <th>Residence permit or equivalent No</th>
                                                <td>{{ $profile->residence_number}}</td>
                                                <th>Valid until</th>
                                                <td>{{ $profile->residence_valid}}</td>
                                            </tr>
                                            <tr>
                                                <th>Current occupation</th>
                                                <td>{{ $profile->additional_information?->current_occupation}}</td>
                                                <th>Employer and employer's address and telephone number. For students, name and address of educational establishment.</th>
                                                <td>{{ $profile->additional_information?->employer_address}}</td>
                                            </tr>
                                            <tr>
                                                <th>Main purpose(s) of the journey</th>
                                                <td>{{ $profile->purpose_of_journey}}</td>
                                                <th>Member State(s) of destination</th>
                                                <td>{{ $profile->additional_information?->member_state}}</td>
                                            </tr>
                                            <tr>
                                                <th>Member State of first entry</th>
                                                <td>{{ $profile->additional_information?->member_state_entry}}</td>
                                                <th>Number of entries requested</th>
                                                <td>{{ $profile->additional_information?->entry_requested}}</td>
                                            </tr>
                                            <tr>
                                                <th>Duration of the intended stay or transit Indicate number of days</th>
                                                <td>{{ $profile->additional_information?->duration}}</td>
                                                <th>Schengen visas issued during the past three years</th>
                                                <td>{{ $profile->additional_information?->visa_issue_before == 1 ? "Yes" : "No"}}</td>
                                            </tr>
                                            <tr>
                                                <th>Date(s) of validity from</th>
                                                <td>{{ $profile->additional_information?->date_from}}</td>
                                                <th>Date(s) of validity To</th>
                                                <td>{{ $profile->additional_information?->date_to}}</td>
                                            </tr>
                                            <tr>
                                                <th>Fingerprints collected previously for the purpose of applying for a Schengen visa</th>
                                                <td>{{ $profile->additional_information?->fingerprint == 1 ? "Yes" : "No"}}</td>
                                                <th>Collection Date</th>
                                                <td>{{ $profile->additional_information?->collection_date}}</td>
                                            </tr>
                                            <tr>
                                                <th>Entry permit for the final country of destination,<sub>Issued By</sub></th>
                                                <td>{{ $profile->additional_information?->permit_issuer}}</td>
                                                <th>Valid from</th>
                                                <td>{{ $profile->additional_information?->valid_from}}</td>
                                            </tr>
                                            <tr>
                                                <th>Valid To</th>
                                                <td>{{ $profile->additional_information?->valid_to}}</td>
                                                <th>Intended date of arrival in the Schengen area</th>
                                                <td>{{ $profile->additional_information?->arrival_date}}</td>
                                            </tr>
                                            <tr>
                                                <th>Intended date of departure from the Schengen area</th>
                                                <td>{{ $profile->additional_information?->departure_date}}</td>
                                                <th>Surname and first name of the inviting person(s) in the Member State(s). If not applicable, name of hotel(s) or temporary
                                                    accommodation(s) in the Member State(s)</th>
                                                <td>{{ $profile->additional_information?->inviting_person}}</td>
                                            </tr>
                                            <tr>
                                                <th>Address and e-mail address of inviting person(s)/hotel(s)/temporary
                                                    accommodation(s)</th>
                                                <td>{{ $profile->additional_information?->inviting_person_address}}</td>
                                                <th>Name and address of inviting company/organisation</th>
                                                <td>{{ $profile->additional_information?->inviting_company}}</td>
                                            </tr>
                                            <tr>
                                                <th>Telephone and telefax of company/organisation</th>
                                                <td>{{ $profile->additional_information?->inviting_company_address}}</td>
                                                <th>Surname, first name, address, telephone, telefax, and e-mail address of contact person in company/organisation</th>
                                                <td>{{ $profile->additional_information?->company_personel}}</td>
                                            </tr>
                                            <tr>
                                                <th>Cost of travelling and living during the applicant's stay is covered</th>
                                                <td colspan="3">{{ $profile->additional_information?->cost_of_travel}}</td>
                                               
                                            </tr>
                                            <tr>
                                                <th class="text-center" colspan="4">Personal data of the family member who is an EU, EEA or CH citizen</th>
                                            </tr>
                                            <tr>
                                                <th>Surname</th>
                                                <td>{{ $profile->additional_information?->family_surname}}</td>
                                                <th>First name(s)</th>
                                                <td>{{ $profile->additional_information?->family_firstname}}</td>
                                            </tr>
                                            <tr>
                                                <th>Date of birth</th>
                                                <td>{{ $profile->additional_information?->family_dob}}</td>
                                                <th>Nationality</th>
                                                <td>{{ $profile->additional_information?->family_nationality}}</td>
                                            </tr>
                                            <tr>
                                                <th>Number of travel document or ID card</th>
                                                <td>{{ $profile->additional_information?->family_nin}}</td>
                                                <th>Family relationship with an EU, EEA or CH citizen</th>
                                                <td>{{ $profile->additional_information?->family_relationship}}</td>
                                            </tr>
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
                                        @include('backend.applications.track_add',['track_id'=>$profile->active_track->id])
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
