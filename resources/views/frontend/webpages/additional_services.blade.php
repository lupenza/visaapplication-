@extends('frontend.layouts.main')

@section('content')
<main class="fix">
     <!-- breadcrumb-area -->
     <section class="breadcrumb__area breadcrumb__bg mt-150" data-background="{{ asset('assets/frontend/img/bg/breadcrumb_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb__content">
                        <h2 class="title">Additional Services</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href='{{ route('home')}}'>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Additional Services</li>
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
    </section>
    <!-- breadcrumb-area-end -->
    <!-- about-area -->
    <section class="our_team__area-six mt-3 mb-5">
        <div class="container">
            <div class="section-title mb-30 tg-heading-subheading animation-style3 text-center">
                {{-- <span class="sub-title text-capitalize">Explore More</span> --}}
                <h2 class="title tg-element-title">Our Additional Service</h2>
            </div>
            <div class="row">
                @foreach ($services as $service)
                <div class="col-md-4 our-service-container">
                    <div class="image-container" style="background-image: url('{{ asset("storage/website"."/".$service->image)}}')">
                    </div>
                    <div class="service-text-container">
                        <h6>{{ $service->name}}</h6>
                        <p>{{ $service->caption }}</p>
                        <a href="">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>   
                @endforeach
            </div>
            {{-- <div class="text-center mt-4">
                <a class='btn' data-aos-delay='600' data-aos='fade-up' href='{{ route('additional.service')}}'>View More</a>
            </div> --}}
        </div>
    </section>
    <!-- about-area-end -->
</main>
@endsection
