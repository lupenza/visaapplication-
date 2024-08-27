@extends('frontend.layouts.main')

@section('content')
<main class="fix">
     <!-- breadcrumb-area -->
     <section class="breadcrumb__area breadcrumb__bg mt-150" data-background="{{ asset('assets/frontend/img/bg/breadcrumb_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb__content">
                        <h2 class="title">{{ $service->name }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href='{{ route('home')}}'>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $service->name }}</li>
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
    <section class="pricing__area pricing__bg" data-background="assets/img/bg/pricing_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section-title text-center mb-30">
                        <span class="sub-title">Flexible Pricing Plan</span>
                        <h2 class="title">We’ve Offered The Best Pricing For You</h2>
                    </div>
                </div>
            </div>
            <div class="pricing__item-wrap">
                {{-- <div class="pricing__tab">
                    <span class="pricing__tab-btn monthly_tab_title">Monthly</span>
                    <span class="pricing__tab-switcher"></span>
                    <span class="pricing__tab-btn annual_tab_title">Yearly</span>
                </div> --}}
                <div class="row justify-content-center">
                    @forelse ($service->price_plans as $pricing)
                    <div class="col-lg-4 col-md-6 col-sm-8 text-center">
                        <div class="pricing__box">
                            <div class="pricing__head">
                                <h5 class="title">{{ $pricing->name}}</h5>
                            </div>
                            <div class="pricing__price">
                                <h2 class="price monthly_price">{!! $pricing->price !!}</h2>
                            </div>
                            <div class="pricing__list">
                                <ul class="list-wrap">
                                    @foreach ($pricing->price_offer as $offer)
                                    <li>
                                        <i class="fa fa-check"></i>
                                        {{ $offer }}
                                    </li>  
                                    @endforeach
                                </ul>
                            </div>
                            <div class="pricing__btn">
                                <a href="javascript:void(0)" class="btn">Choose</a>
                            </div> 
                        </div>
                    </div> 
                    @empty
                        
                    @endforelse
                    
                    {{-- <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="pricing__box">
                            <div class="pricing__head">
                                <h5 class="title">Standard Plan</h5>
                            </div>
                            <div class="pricing__price">
                                <h2 class="price monthly_price"><strong>$</strong> 29.00 <span>/ Month</span></h2>
                                <h2 class="price annual_price"><strong>$</strong> 229.00 <span>/ Month</span></h2>
                            </div>
                            <div class="pricing__list">
                                <ul class="list-wrap">
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="">
                                        5000 User Activities
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="">
                                        Unlimited Access
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="">
                                        No Hidden Charge
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="">
                                        03 Time Updates
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="">
                                        Figma Source File
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing__btn">
                                <a href="javascript:void(0)" class="btn">Get this plan Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="pricing__box">
                            <div class="pricing__head">
                                <h5 class="title">Corporate Plan</h5>
                            </div>
                            <div class="pricing__price">
                                <h2 class="price monthly_price"><strong>$</strong> 89.00 <span>/ Month</span></h2>
                                <h2 class="price annual_price"><strong>$</strong> 889.00 <span>/ Month</span></h2>
                            </div>
                            <div class="pricing__list">
                                <ul class="list-wrap">
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="">
                                        5000 User Activities
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="">
                                        Unlimited Access
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="">
                                        No Hidden Charge
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="">
                                        03 Time Updates
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="">
                                        Figma Source File
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing__btn">
                                <a href="javascript:void(0)" class="btn">Get this plan Now</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
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
