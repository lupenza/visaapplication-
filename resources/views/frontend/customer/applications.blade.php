@extends('frontend.layouts.main')

@section('content')
<main class="fix">
     <!-- breadcrumb-area -->
     {{-- <section class="breadcrumb__area breadcrumb__bg mt-150" data-background="{{ asset('assets/frontend/img/bg/breadcrumb_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb__content">
                        <h2 class="title">Sign In</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href='{{ route('home')}}'>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign In</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape">
            <img src=" {{ asset('assets/frontend/img/images/breadcrumb_shape01.png') }}" alt="">
            <img src=" {{ asset('assets/frontend/img/images/breadcrumb_shape02.png') }}" alt="" class="rightToLeft">
            <img src=" {{ asset('assets/frontend/img/images/breadcrumb_shape03.png') }}" alt="">
            <img src=" {{ asset('assets/frontend/img/images/breadcrumb_shape04.png') }}" alt="">
            <img src=" {{ asset('assets/frontend/img/images/breadcrumb_shape05.png') }}" alt="" class="alltuchtopdown">
        </div>
    </section> --}}
    <!-- breadcrumb-area-end -->
    <!-- about-area -->
    <section class="services__details-area mt-150">
        <div class="container">
            <div class="services__details-wrap">
                <div class="row">
                    <div class="col-70 order-0 order-lg-2">
                        <h5 class="text-center">All Application</h5>
                        <div class="services__details-content">
                            <div class="services__details-list">
                                <div class="row">
                                  <div class="col-md-12 table-responsive">
                                    <table id="myTable" class="table table-bordered dt-responsive  nowrap w-100">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Applied At</th>
                                            <th>Service</th>
                                            <th>Plan</th>
                                            <th>Price</th>
                                            <th>Stage</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($applications as $application)
                                                <tr>
                                                    <td>{{ $loop->iteration}}</td>
                                                    <td>{{ date('Y-m-d',strtotime($application->created_at))}} </td>
                                                    <td>{{ $application->applied_service }}</td>
                                                    <td>{{ $application->service_plan?->name}}</td>
                                                    <td>{!! $application->service_plan?->price !!}</td>
                                                    <td>{!! $application->stage_formatted_customer !!}</td>
                                                    <td>
                                                        <a href="{{ route('application.profile',['uuid'=>$application->uuid])}}">
                                                            <button class="custom-btn"><i class="fa fa-user"></i></button>
                                                        </a>
                                                        <a href="{{ route('edit.application.profile',['uuid'=>$application->uuid])}}">
                                                            <button class="custom-btn" style="background-color: #203574"><i class="fa fa-edit"></i></button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                           
                                        </tbody>
                                       
                                    </table>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @include('frontend.customer.includes.sidebar')
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@push('scripts')
<script>
    let table = new DataTable('#myTable');
</script>
    
@endpush
