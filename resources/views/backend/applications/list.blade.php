@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Application</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">List</a></li>
                        <li class="breadcrumb-item active">Application List</li>
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
                    <h4 class="card-title text-center" >Applications</h4>
                    <div style="display: flex; flex-direction: row; justify-content:flex-end; padding: 5px 0px 5px 0px">
                        <div class="dropdown mt-4 mt-sm-0">
                            <a href="#" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Visa Application <i class="mdi mdi-chevron-down"></i>
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('application.create',1)}}">USA Visa</a>
                                <a class="dropdown-item" href="{{ route('application.create',2)}}">Schengen Visa</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card">
                        <div class="card-body"> --}}
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">USA Visa Aplications</span> 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">Schengen Visa Aplications</span> 
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Messages</span>   
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                        <span class="d-none d-sm-block">Settings</span>    
                                    </a>
                                </li> --}}
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="home1" role="tabpanel">
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Applied At</th>
                                                <th>Name</th>
                                                {{-- <th>Maritial Status</th> --}}
                                                <th>Arrival Date</th>
                                                <th>Departure Date</th>
                                                <th>Stage</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($usa as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration}}</td>
                                                        <td>{{ $item->created_at}} </td>
                                                        <td>{{ $item->applicant?->name }}</td>
                                                        <td>{{ $item->arrival_date }}</td>
                                                        <td>{{ $item->departure_date }}</td>
                                                        <td>{!! $item->stage_formatted !!}</td>
                                                        <td>
                                                            <button class="btn btn-primary btn-sm" ><i class="fa fa-user"></i></button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                               
                                            </tbody>
                                           
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile1" role="tabpanel">
                                    <div class="table-responsive">
                                        <table id="datatable1" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Applied At</th>
                                                <th>Name</th>
                                                {{-- <th>Maritial Status</th> --}}
                                                <th>Arrival Date</th>
                                                <th>Departure Date</th>
                                                <th>Stage</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($schengen as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration}}</td>
                                                        <td>{{ $item->created_at}} </td>
                                                        <td>{{ $item->applicant?->name }}</td>
                                                        <td>{{ $item->additional_information?->arrival_date }}</td>
                                                        <td>{{ $item->additional_information?->departure_date }}</td>
                                                        <td>{!! $item->stage_formatted !!}</td>
                                                        <td>
                                                            <button class="btn btn-primary btn-sm" ><i class="fa fa-user"></i></button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                               
                                            </tbody>
                                           
                                        </table>
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
     function deleteProgram(id){
        Swal.fire({
            title: "Delete Program?",
            text: "Are you Sure You want to delete this !",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            confirmButtonClass: "btn btn-success mt-2",
            cancelButtonClass: "btn btn-danger ms-2 mt-2",
            buttonsStyling: !1,
        }).then(function (t) {
            if (t.value) {
                var csrf_tokken =$('meta[name="csrf-token"]').attr('content');
                $.ajax({
                        url: "{{ url('program.destroy')}}", 
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
                        Swal.fire({ title: "Deleted!", text: response.responseJson.errors, icon: "warning" })

                         console.log(response.responseText);
                         //   $.notify(response.responseJson.errors,'error');  
                        }
                    });
            }
        });
  }
</script>
    
@endpush
