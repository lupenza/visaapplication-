@extends('frontend.layouts.main')

@section('content')
<main class="fix">
     <!-- breadcrumb-area -->
     <section class="breadcrumb__area breadcrumb__bg mt-150" data-background="{{ asset('assets/frontend/img/bg/breadcrumb_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb__content">
                        <h2 class="title">Success Stories</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href='{{ route('home')}}'>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Success Stories</li>
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
    <section class="pricing__area pricing__bg" data-background="{{ asset('assets/frontend/img/bg/pricing_bg.jpg')}}">
        <div class="container">
                <div class="row" style="padding-left: 120px">
                    @forelse ($testimonials as $testimonial)
                    <div class="col-md-5 testimonial-container">
                        <i class="fa fa-quote-left test-icon"></i>
                        <p class="text">
                           {{ $testimonial->description}}
                        </p>
                        <div class="testmonial-bottom-container">
                            <div class="icon"  >
                               <span>{{ $testimonial->name[0]}}</span>
                            </div>
                            <div class="text-container-test">
                                <h6>{{ $testimonial->name}}</h6>
                                <p>{{ $testimonial->designation}}</p>
                            </div>
                        </div>
                    </div>  
                    @empty
                    @endforelse
                </div>
           
        </div>
        <div class="pricing__shape-wrap">
            <img src="{{ asset('assets/frontend/img/images/pricing_shape01.png')}}" alt="" data-aos="fade-right" data-aos-delay="400">
            <img src="{{ asset('assets/frontend/img/images/pricing_shape02.png')}}" alt="" data-aos="fade-left" data-aos-delay="400">
        </div>
    </section>
    <!-- about-area-end -->
</main>
@endsection
