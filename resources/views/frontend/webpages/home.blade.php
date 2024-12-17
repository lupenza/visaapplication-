@extends('frontend.layouts.main')
@section('content')
<main class="fix">
    <!-- banner-area -->
    <section class="banner__area-two banner__bg-two" data-background="{{ asset('assets/frontend/img/banner/h3_banner_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner__content-two">
                        <h2 class="title" data-aos="fade-up" data-aos-delay="100">VISA APPLICATION  <span>ASSISTANCE</span> SERVICE</h2>
                        <p data-aos="fade-up" data-aos-delay="300">Apply VISA with confidence</p>
                        <a class='btn' data-aos-delay='600' data-aos='fade-up' href='{{route('apply.visa')}}'>Apply now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-social banner-social-two">
            <h5 class="title">Follow us</h5>
            <ul class="list-wrap">
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-pinterest-p"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
        <div class="banner__shape-two">
            <img src="{{ asset('assets/frontend/img/banner/h3_banner_shape01.png')}}" alt="" class="heartbeat">
        </div>
    </section>


    <div class="brand-area brand__area-one">
        <div class="container">
            <div class="swiper-container brand-active">
                <div class="swiper-wrapper">
                    @foreach ($countries as $country)
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="{{ asset('storage/website/'.$country->image) }}" alt="{{ $country->name }}">
                            </div>
                        </div>  
                        @endforeach  
                </div>
            </div>
        </div>
    </div>

    <!-- banner-area-end -->
      <!-- services-area -->
      <section class="services__area-seven services__bg-seven" data-background="assets/img/bg/h5_services_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">WHAT WE OFFER</span>
                        <h2 class="title">We VAAS do for you</h2>
                    </div>
                </div>
            </div>
            <div class="row gutter-24">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__item-five">
                        <div class="new_icon_div">
                            <i class="fa fa-globe text-white new_icon_style"></i>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title"><a href=''>Visa Application Assistance & Consultation</a></h2>
                            <p style="text-align: left">Expert guidance through every step of the visa application process.</p>
                            {{-- <a class='btn' href='services-details.html'>Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__item-five">
                        <div class="new_icon_div">
                            <i class="fa fa-address-card text-white new_icon_style"></i>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title"><a href=''>Appointment Booking Assistance </a></h2>
                            <p style="text-align: left">Secure your Embassy Appointment date with ease</p>
                            {{-- <a class='btn' href='services-details.html'>Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__item-five">
                        <div class="new_icon_div">
                            <i class="fa fa-plane text-white new_icon_style"></i>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title"><a href=''>Travel Insurance</a></h2>
                            <p style="text-align: left">Comprehensive travel insurance plans for a worry-free journey</p>
                            {{-- <a class='btn' href='services-details.html'>Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__item-five">
                        <div class="new_icon_div">
                            <i class="fa fa-hotel text-white new_icon_style"></i>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title"><a href=''>Hotel & Flight booking</a></h2>
                            <p style="text-align: left">Book your hotel and flights with us</p>
                            {{-- <a class='btn' href='services-details.html'>Read More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->
    <!-- about-area -->
    <section class="about__area-three about__bg-two" data-background="{{ asset('assets/frontend/img/bg/h3_about_bg.jpg')}}">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="about__img-wrap-three">
                        <img src="{{ asset('assets/frontend/img/images/h3_about_img01.jpg')}}" alt="">
                        <img src="{{ asset('assets/frontend/img/images/h3_about_img02.jpg')}}" alt="" data-parallax='{"x" : 50 }'>
                        <div class="shape">
                            <img src="{{ asset('assets/frontend/img/images/h3_about_img_shape.png')}}" alt="" class="alltuchtopdown">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content-three">
                        <div class="section-title mb-25 tg-heading-subheading animation-style3">
                            <span class="sub-title">Why Choose Us</span>
                            <h2 class="title tg-element-title">VAAS is your Best Travel Companion</h2>
                        </div>
                        <p>At VAAS, we are committed to making your travel planning as seamless and stress-free as possible. Our dedication to excellence and customer satisfaction sets us apart.</p>
                        <div class="row justify-content-center gutter-24">
                            <div class="col-lg-6 col-md-12">
                                <div class="services__item-three new_service_item">
                                    <div class="services__item-top">
                                        <div class="services__icon-three">
                                            <i class="flaticon-profit"></i>
                                        </div>
                                        <div class="services__item-top-title">
                                            <h2 class="title"><a href='services-details.html'>Expert <br> Knowledge</a></h2>
                                        </div>
                                    </div>
                                    <div class="services__content-three">
                                        <ul style="list-style-type: none; padding-left:0;">
                                            <li> <i class="fa fa-check service-icon"></i>Over 10 years of experience in the travel and visa industry</li>
                                            <li> <i class="fa fa-check service-icon"></i>Professionals who stay updated with the latest regulations</li> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="services__item-three new_service_item">
                                    <div class="services__item-top">
                                        <div class="services__icon-three">
                                            <i class="flaticon-target"></i>
                                        </div>
                                        <div class="services__top-title">
                                            <h2 class="title"><a href='services-details.html'>Customer <br> Support</a></h2>
                                        </div>
                                    </div>
                                    <div class="services__content-three">
                                        <ul style="list-style-type: none; padding-left:0;">
                                            <li> <i class="fa fa-check service-icon"></i>24/7 customer support to answer all your queries</li>
                                            <li> <i class="fa fa-check service-icon"></i>Friendly and knowledgeable staff ready to assist you</li> 
                                        </ul>
                                        {{-- <p>Mauris utenim sitamet lacus ornar eary ullamcperson Praesent plaacera treat neque eu purus rhoncu</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="services__item-three new_service_item">
                                    <div class="services__item-top">
                                        <div class="services__icon-three">
                                            <i class="flaticon-financial-profit"></i>
                                        </div>
                                        <div class="services__top-title">
                                            <h2 class="title"><a href='services-details.html'>High <br>Success Rate </a></h2>
                                        </div>
                                    </div>
                                    <div class="services__content-three">
                                        <ul style="list-style-type: none; padding-left:0;">
                                            <li> <i class="fa fa-check service-icon"></i>High success rate in visa approvals.</li>
                                            <li> <i class="fa fa-check service-icon"></i>Proven track record with thousands of satisfied customers</li> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="services__item-three new_service_item">
                                    <div class="services__item-top">
                                        <div class="services__icon-three">
                                            <i class="flaticon-piggy-bank"></i>
                                        </div>
                                        <div class="services__top-title">
                                            <h2 class="title"><a href='services-details.html'>Affordable  <br> Pricess</a></h2>
                                        </div>
                                    </div>
                                    <div class="services__content-three">
                                        <ul style="list-style-type: none; padding-left:0;">
                                            <li> <i class="fa fa-check service-icon"></i>Competitive pricing without compromising on quality</li>
                                            <li> <i class="fa fa-check service-icon"></i>Transparent fee structure with no hidden charges</li> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about__shape-wrap-three">
                            <img src="{{ asset('assets/frontend/img/images/h3_about_shape01.png')}}" alt="" class="rotateme">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->
    <section class="services__area-seven services__bg-seven" data-background="{{ asset('assets/frontend/img/bg/h5_services_bg.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title mb-30">
                        <span class="sub-title">Who we serve</span>
                        <h2 class="title">Our Clients</h2>
                    </div>
                </div>
            </div>
            <div class="row gutter-24">
                @foreach ($clients as $client) 
                    <div class="col-xl-4 col-lg-4 col-md-6 text-center">
                        <div class="services__item-five">
                            <div class="new_icon_div">
                                <i class="fa fa-globe text-white new_icon_style"></i>
                            </div>
                            <div class="services__content-five">
                                <h2 class="title"><a href='services-details.html'>{{ $client->name}}</a></h2>
                                <p style="text-align: left">{{ $client->description }}</p>
                                {{-- <a class='btn' href='services-details.html'>Read More</a> --}}
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>
        </div>
          <!-- brand-area -->
          <div class="brand-area brand__area-two">
            <div class="container">
                <div class="swiper-container brand-active">
                    <div class="swiper-wrapper">
                        @foreach ($brands as $brand)
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="{{ asset('storage/website/'.$brand->image) }}" alt="{{ $brand->name }}">
                            </div>
                        </div>  
                        @endforeach   
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area -->
    </section>
    <section class="our_team__area-six">
        <div class="container">
            <div class="section-title mb-30 tg-heading-subheading animation-style3 text-center">
                <span class="sub-title text-capitalize">Explore More</span>
                <h2 class="title tg-element-title">Our Additional Services</h2>
            </div>
            <div class="row">
                @foreach ($services as $index => $service)
                <div class="col-md-4 our-service-container">
                    <div class="image-container" style="background-image: url('{{ asset("storage/website"."/".$service->image)}}')">
                    </div>
                    <div class="service-text-container">
                        <h6>{{ $service->name}}</h6>
                        <p>{{ $service->caption }}</p>
                        <a href="{{ route('service.detail',$service->uuid)}}">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>  
                @php
                   if($index > 4) {
                    break; 
                   } 
                @endphp 
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a class='btn' data-aos-delay='600' data-aos='fade-up' href='{{ route('additional.service')}}'>View More</a>
            </div>
        </div>
    </section>
    <section class="services__area-seven services__bg-seven" data-background="{{ asset('assets/frontend/img/bg/h5_services_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title mb-50">
                        <span class="sub-title">Top Countries</span>
                        <h2 class="title" style="font-size: 30px !important">List Of Countries That We Can Assist You.</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="text-align: right">
                        <a class='btn' data-aos-delay='600' data-aos='fade-up' href='{{ route('countries')}}'>View More</a>
                    </div>
                </div>
            </div>
            <div class="row gutter-24">
                @foreach ($countries as $index => $country)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <a href="{{ route('get.country', $country->uuid) }}">
                        <div class="services__item-five" style="text-align: left !important ; padding-top: 30px !important;">
                            <div class="services__icon-five" style="margin-bottom: 20px !important" >
                                <div>
                                    <img style="width: 50px; border-radius: 50%; height: 50px" src="{{ asset('storage/website'.'/'.$country->image)}}" alt="">
                                </div>
                            </div>
                            <div class="services__content-five" style="padding-top: 0px !important">
                                <h2 class="title"><a href='{{ route('get.country',$country->uuid)}}'>{{ $country->name }}</a></h2>
                                <ul style="list-style-type: none; padding-left:0;">
                                    @foreach ($country->country_special as $item)
                                    <li> <i class="fa fa-check service-icon"></i>{{ $item}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>   
                @php
                   if($index > 2) {
                    break; 
                   } 
                @endphp
                @endforeach
               
                {{-- <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__item-five" style="text-align: left !important ; padding-top: 30px !important;">
                        <div class="services__icon-five" style="margin-bottom: 20px !important" >
                            <div>
                                <img style="width: 50px; border-radius: 50%; height: 50px" src="{{ asset('assets/frontend/img/flag_t.png')}}" alt="">
                            </div>
                        </div>
                        <div class="services__content-five" style="padding-top: 0px !important">
                            <h2 class="title"><a href='services-details.html'>Marketing Plan</a></h2>
                            <ul style="list-style-type: none; padding-left:0;">
                                <li> <i class="fa fa-check service-icon"></i>list one</li>
                                <li> <i class="fa fa-check service-icon"></i>list one</li>
                                <li> <i class="fa fa-check service-icon"></i>list one</li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__item-five" style="text-align: left !important ; padding-top: 30px !important;">
                        <div class="services__icon-five" style="margin-bottom: 20px !important" >
                            <div>
                                <img style="width: 50px; border-radius: 50%; height: 50px" src="{{ asset('assets/frontend/img/flag_t.png')}}" alt="">
                            </div>
                        </div>
                        <div class="services__content-five" style="padding-top: 0px !important">
                            <h2 class="title"><a href='services-details.html'>Marketing Plan</a></h2>
                            <ul style="list-style-type: none; padding-left:0;">
                                <li> <i class="fa fa-check service-icon"></i>list one</li>
                                <li> <i class="fa fa-check service-icon"></i>list one</li>
                                <li> <i class="fa fa-check service-icon"></i>list one</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__item-five" style="text-align: left !important ; padding-top: 30px !important;">
                        <div class="services__icon-five" style="margin-bottom: 20px !important" >
                            <div>
                                <img style="width: 50px; border-radius: 50%; height: 50px" src="{{ asset('assets/frontend/img/flag_t.png')}}" alt="">
                            </div>
                        </div>
                        <div class="services__content-five" style="padding-top: 0px !important">
                            <h2 class="title"><a href='services-details.html'>Marketing Plan</a></h2>
                            <ul style="list-style-type: none; padding-left:0;">
                                <li> <i class="fa fa-check service-icon"></i>list one</li>
                                <li> <i class="fa fa-check service-icon"></i>list one</li>
                                <li> <i class="fa fa-check service-icon"></i>list one</li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
               
            </div>
        </div>
    </section> 
    <!-- choose-area -->
    <!-- consulting-area -->
    <div class="row w-100" style="position: relative; display: inline-block;"> 
        <!-- Image -->
        <img src="{{ 'storage/website/933x493px.jpg'}}" alt="" style="display: block; width: 100%; height: auto;">
    
        <!-- Text Centered on the Image -->
        <div class="tz-body">
            <h3 class="tz-header">
                Explore Tanzania with Ease – Get Your e-Visa Today!
            </h3>
            <p class="tz-paragraph">
                Simplify your travel plans with our hassle-free e-Visa service. Whether you’re a visitor, a
                Tanzanian inviting family, or planning an unforgettable adventure, our expert team makes the
                application process quick and easy. Discover Tanzania without the paperwork stress – let us
                handle the details!
            </p>
        </div>
    </div>
    <section>
        <div class="container mt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="about__content-three">
                       
                        <div class="process-container">
                            <div class="left-process-container">
                                <div class="sub-process-container">
                                    <div class="process-icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="process-text-container">
                                        <p>01</p>
                                        <h6>Consultation</h6>
                                        <p>Discuss your travel plans <br>and visa requirements with <br>our experts</p>
                                    </div>
                                </div>
                                <div class="sub-process-container">
                                    <div class="process-icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="process-text-container">
                                        <p>02</p>
                                        <h6>Document preparation</h6>
                                        <p>Gather and prepare all necessary <br> documents with our guidance</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                               <div>
                                <div class="section-title mb-25 tg-heading-subheading animation-style3 text-center">
                                    <span class="sub-title">Process Overview</span>
                                    <h2 class="title tg-element-title">Where VAAS Helps Reach <br> Dream Destination</h2>
                                </div>
                               </div>
                               <div class="right-process-container">
                                <div class="sub-process-container">
                                    <div class="process-icon-right">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="process-text-container">
                                        <p>03</p>
                                        <h6>Application Submission</h6>
                                        <p>Submit your application information through our secure portal. We finalize the application submission on your behalf</p>
                                    </div>
                                </div>
                                <div class="sub-process-container">
                                    <div class="process-icon-right">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="process-text-container">
                                        <p>04</p>
                                        <h6>Embassy Procedures</h6>
                                        <p>If required, we will direct you to 
                                            the embassy to complete the application procedure, such as biometric collection or visa interview</p>
                                    </div>
                                </div>
                                <div class="sub-process-container">
                                    <div class="process-icon-right">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="process-text-container">
                                        <p>05</p>
                                        <h6>Visa Results</h6>
                                        <p>Get your visa Application results and plan journey</p>
                                    </div>
                                </div>
                                
                               </div>
                                
                            </div>

                        </div>
                        <div class="about__shape-wrap-three">
                            <img src="{{ asset('assets/frontend/img/images/h3_about_shape01.png')}}" alt="" class="rotateme">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <div class="row" style="margin-top: -200px; position:relative; ">
        <div class="col-md-2"></div>
        <div class="col-md-8 exp-main-container">
            <div class="row">
                <div class="col-md-6">
                    <h6>Success Story</h6>
                    <p class="lead-text">OUR SUCCESS <br> BY THE NUMBERS</p>
                    <p class="lead-paragraph">Empowering travellers with unmatched expertise and a 90% Visa Success rate.</p>
                </div>
                <div class="col-md-6 exp-container">
                    <div class="top-exp-container">
                        <div class="exp-sub-container">
                            <div class="icon">
                                <i class="fa fa-user icon-style"></i>
                            </div>
                            <div class="exp-text-container">
                                <h6>1000 +</h6>
                                <p>Visa Processed</p>
                            </div>
                        </div>
                        <div class="exp-sub-container right">
                            <div class="icon">
                                <i class="fa fa-user icon-style"></i>
                            </div>
                            <div class="exp-text-container">
                                <h6>30 +</h6>
                                <p>Countries Served</p>
                            </div>
                        </div>
                    </div>
                    <div class="down-exp-container">
                        <div class="exp-sub-container">
                            <div class="icon">
                                <i class="fa fa-user icon-style"></i>
                            </div>
                            <div class="exp-text-container">
                                <h6>10 +</h6>
                                <p>Years of Experience</p>
                            </div>
                        </div>
                        <div class="exp-sub-container">
                            <div class="icon">
                                <i class="fa fa-user icon-style"></i>
                            </div>
                            <div class="exp-text-container">
                                <h6>90%</h6>
                                <p>Successful Applicants</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
   </div>
   <div class="row" style="margin-top: 60px">
    <div class="col-md-2"></div>
    <div class="col-md-8 ">
        <div class="row">
            <div class="col-md-6 message-container">
                <form action="">
                    <div class="form-group row mt-5">
                        <div class="col-md-6">
                            <label for="">Your Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="col-md-6">
                            <label for="">Your Phone</label>
                            <input type="number" name="phone" class="form-control" placeholder="Your Phone">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <label for="">Your Address</label>
                            <input type="text" name="address" class="form-control" placeholder="You Address">

                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <label for="">Message</label>
                            <textarea name="message" class="form-control" placeholder="Write Message ...... "></textarea>
                        </div>
                    </div>
                    <div class="form-group row mt-3 mb-5">
                        <div class="col-md-12 text-center">
                            <button class="btn btn-primary btn-sm w-100"> Send Message </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 contact-container">
                <h6>Message Us</h6>
                <h5>Get Your <br>Visa Now</h5>
                <p class="text1">Join Over 1000 satified travelers <br>Who Trust us with their travel needs</p>
                <div>
                    <div class="contact-sub-container">
                        <div>
                            <i class="fa fa-phone icon"></i>
                        </div>
                        <div>
                            <p class="lead-title">Requesting A Call</p>
                            <p class="sub-lead-title">0755 555 029 or Whatsapp 0755 555 000</p>
                        </div>
                    </div>
                    <div class="contact-sub-container mt-3">
                        <div>
                            <i class="fa fa-clock icon"></i>
                        </div>
                        <div>
                            <p class="lead-title">Open Hours</p>
                            <p class="sub-lead-title">8:30AM - 05PM </p>
                        </div>
                    </div>
                    <div class="contact-sub-container mt-3">
                        <div>
                            <i class="fa fa-map-pin icon"></i>
                        </div>
                        <div>
                            <p class="lead-title">Location</p>
                            <p class="sub-lead-title">Dar Free Market, Dar es Salaam. Tanzania</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-2"></div>
   </div>
    <!-- consulting-area-end -->
    <section class="choose__area-three">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title mb-25 tg-heading-subheading animation-style3">
                        <span class="sub-title">Visa category</span>
                        <h2 class="title tg-element-title">Adventure Awaits Around Every Corner</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9 order-0 order-lg-2">
                    <div class="choose__img-wrap-three">
                        <div class="main-img">
                            <img src="{{ asset('assets/frontend/img/images/h3_choose_img01.jpg')}}" alt="">
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        </div>
                        <img src="{{ asset('assets/frontend/img/images/h3_choose_img02.jpg')}}" alt="" data-parallax='{"y" : 80 }'>
                        <div class="shape">
                            <img src="{{ asset('assets/frontend/img/images/h3_choose_img_shape.jpg')}}" alt="" class="alltuchtopdown">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose__content-three">
                        <div class="choose__list">
                            <ul class="list-wrap">
                                <li>
                                    <div class="choose__list-box">
                                        <div class="choose__list-icon">
                                            <i class="flaticon-financial-profit"></i>
                                        </div>
                                        <div class="choose__list-content">
                                            <h4 class="title">Visitor/Tourist Visa</h4>
                                            <p>There are many variati of passages of engineer's available.<br>  have suffered alteration in engineer's available </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="choose__list-box">
                                        <div class="choose__list-icon">
                                            <i class="flaticon-report"></i>
                                        </div>
                                        <div class="choose__list-content">
                                            <h4 class="title">Business Visa</h4>
                                            <p>There are many variati of passages of engineer's available.  have suffered alteration in engineer's available </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="choose__list-box">
                                        <div class="choose__list-icon">
                                            <i class="flaticon-report"></i>
                                        </div>
                                        <div class="choose__list-content">
                                            <h4 class="title">Student Visa</h4>
                                            <p>There are many variati of passages of engineer's available.  have suffered alteration in engineer's available </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="choose__list-box">
                                        <div class="choose__list-icon">
                                            <i class="flaticon-report"></i>
                                        </div>
                                        <div class="choose__list-content">
                                            <h4 class="title">Work Visa</h4>
                                            <p>There are many variati of passages of engineer's available.  have suffered alteration in engineer's available </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="choose__shape-wrap-three">
            <img src="{{ asset('assets/frontend/img/images/h3_choose_shape01.jpg')}}" alt="" data-parallax='{"x" : 100 , "y" : -100 }'>
            <img src="{{ asset('assets/frontend/img/images/h3_choose_shape02.jpg')}}" alt="">
        </div>
    </section>
    <!-- choose-area-end -->
      <!-- testimonial-area -->
      <section class="testimonial__area-four testimonial__bg testimonial__bg-two" data-background="{{ asset('assets/frontend/img/bg/h3_testimonial_bg.jpg')}}">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="testimonial__img-wrap-two">
                        @foreach ($testmonials as $testmonial)
                            <img src="{{asset($testmonial->image)}}" alt="" class="alltuchtopdown">
                        @endforeach
                       
                        <div class="testimonial__img-shape-two">
                            <img src="assets/frontend/img/images/h3_testimonial_shape01.png" alt="" class="alltuchtopdown">
                            <img src="assets/frontend/img/images/inner_testimonial_shape.png" alt="" class="rotateme">
                            <img src="assets/frontend/img/images/h3_testimonial_shape03.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial__item-wrap">
                        <div class="swiper-container testimonial-active-two">
                            <div class="swiper-wrapper">
                                @forelse ($testmonials as $testmonial)
                                <div class="swiper-slide">
                                    <div class="testimonial__item-three">
                                        <div class="testimonial__rating testimonial__rating-two">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>“{{ $testmonial->description }}</p>
                                        <div class="testimonial__bottom">
                                            <div class="testimonial__info-three">
                                                <h4 class="title">{{ $testmonial->name }}</h4>
                                                <span>{{ $testmonial->designation}}</span>
                                            </div>
                                            <div class="testimonial__icon">
                                                <img src="{{ asset('assets/frontend/img/icon/quote02.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                @empty
                                @endforelse
                            </div>
                            <div class="testimonial__nav-two">
                                <div class="testimonial-button-prev"><i class="flaticon-right-arrow"></i></div>
                                <div class="testimonial-button-next"><i class="flaticon-right-arrow"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->
      <!-- brand-area -->
      <div class="brand-area brand__area-two">
        <div class="container">
            <div class="swiper-container brand-active">
                <div class="swiper-wrapper">
                    @foreach ($brands as $brand)
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="{{ asset('storage/website/'.$brand->image) }}" alt="{{ $brand->name }}">
                            </div>
                        </div>  
                        @endforeach  
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area -->
</main>
    
@endsection