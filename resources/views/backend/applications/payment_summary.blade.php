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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Summary</a></li>
                        <li class="breadcrumb-item active">Application Summary</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center" >Payment Summary</h4>
                </div>
                <div class="card border shadow-none mb-2">
                    <a href="javascript: void(0);" class="text-body">
                        <div class="p-2">
                            <div class="d-flex">
                                <div class="avatar-xs align-self-center me-2">
                                    <div class="avatar-title rounded bg-transparent text-success font-size-20">
                                        <i class="mdi mdi-account-circle-outline"></i>
                                    </div>
                                </div>

                                <div class="overflow-hidden me-auto">
                                    <h5 class="font-size-13 text-truncate mb-1">Applicant Name</h5>
                                    <p class="text-muted text-truncate mb-0">{{$data['name']}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card border shadow-none mb-2">
                    <a href="javascript: void(0);" class="text-body">
                        <div class="p-2">
                            <div class="d-flex">
                                <div class="avatar-xs align-self-center me-2">
                                    <div class="avatar-title rounded bg-transparent text-success font-size-20">
                                        <i class="mdi mdi-image"></i>
                                    </div>
                                </div>

                                <div class="overflow-hidden me-auto">
                                    <h5 class="font-size-13 text-truncate mb-1">Visa Type</h5>
                                    <p class="text-muted text-truncate mb-0">{{ $data['visa_type']}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card border shadow-none mb-2">
                    <a href="javascript: void(0);" class="text-body">
                        <div class="p-2">
                            <div class="d-flex">
                                <div class="avatar-xs align-self-center me-2">
                                    <div class="avatar-title rounded bg-transparent text-success font-size-20">
                                        <i class="mdi mdi-calendar"></i>
                                    </div>
                                </div>

                                <div class="overflow-hidden me-auto">
                                    <h5 class="font-size-13 text-truncate mb-1">Arrival date</h5>
                                    <p class="text-muted text-truncate mb-0">{{  $data['arrival_date']}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card border shadow-none mb-2">
                    <a href="javascript: void(0);" class="text-body">
                        <div class="p-2">
                            <div class="d-flex">
                                <div class="avatar-xs align-self-center me-2">
                                    <div class="avatar-title rounded bg-transparent text-success font-size-20">
                                        <i class="mdi mdi-calendar"></i>
                                    </div>
                                </div>

                                <div class="overflow-hidden me-auto">
                                    <h5 class="font-size-13 text-truncate mb-1">Departure Date</h5>
                                    <p class="text-muted text-truncate mb-0">{{  $data['departure_date']}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card border shadow-none mb-2">
                    <a href="javascript: void(0);" class="text-body">
                        <div class="p-2">
                            <div class="d-flex">
                                <div class="avatar-xs align-self-center me-2">
                                    <div class="avatar-title rounded bg-transparent text-success font-size-20">
                                        <i class="mdi mdi-cash"></i>
                                    </div>
                                </div>

                                <div class="overflow-hidden me-auto">
                                    <h5 class="font-size-13 text-truncate mb-1">Amount</h5>
                                    <p class="text-muted text-truncate mb-0">{{ $data['amount']}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    {{-- <a href="{{ route('process.payment',$data['personal_id'],$data['type'])}}"> --}}
                        <a href="{{ route('process.payment', ['personal_id' => $data['personal_id'], 'type' => $data['type']]) }}">
                    <button class="btn btn-primary w-100 mt-3"> Continue To Payment  <i class="fa fa-arrow-right"></i></button>
                    </a>
                </div>
            </div>
        </div>
    </div> <!-- end row -->
</div> <!-- container-fluid -->
@endsection

