@extends('frontend.layouts.main')

@section('content')
<main class="fix">
    <section class="services__details-area mt-150">
        <div class="container">
            <div class="services__details-wrap">
                <div class="row">
                    <div class="col-70 order-0 order-lg-2">
                        <div class="services__details-content">
                            <div class="services__details-list">
                                <div class="dashboard-card-container">
                                    <div class="dashboard-card" >
                                        <div>
                                            <p>Total Applications</p>
                                            <p>{{ Auth::user()->applications->count()}}</p>
                                            
                                        </div>
                                        <div>
                                            <div class="card-icon-div" style="background-color: #20BFEA">
                                                <i class="fa fa-file"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dashboard-card" >
                                        <div>
                                            <p>Success Applications</p>
                                            <p>{{ Auth::user()->applications->where('application_stage',2)->count()}}</p>
                                            
                                        </div>
                                        <div>
                                            <div class="card-icon-div" style="background-color: #04A96D">
                                                <i class="fa fa-check text-white" style="color: #fff"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dashboard-card">
                                        <div>
                                            <p>Total Payment</p>
                                            <p>{{ number_format(Auth::user()->payments->sum('amount'))}}</p>
                                            
                                        </div>
                                        <div>
                                            <div class="card-icon-div"  style="background-color: #203574">
                                                <i class="fa fa-list-ul"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-lg-12 text-center mt-3">
                                    <a href="{{ route('apply.visa')}}">
                                        <div class="visa_requirement">
                                            <h5>VAAS Provide Variety of Service</h5>
                                            <p>From Visa Application , Document review, Interview Assistance We cover you</p>
                                            <button class="btn btn-primary text-center">Apply Now</button>
                                        </div> 
                                    </a>
                                   
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
