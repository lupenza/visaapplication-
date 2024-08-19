@extends('frontend.layouts.main')
@section('content')
<main class="fix">
    <!-- banner-area -->
    <section class="banner__area-two banner__bg-two" data-background="{{ asset('assets/frontend/img/banner/h3_banner_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner__content-two">
                        <h2 class="title" data-aos="fade-up" data-aos-delay="100">Dynamic solutions that <span>power high</span> growth startups</h2>
                        <p data-aos="fade-up" data-aos-delay="300">Apexa helps you to convert your data into a strategic asset and get business insights Apexa helps you to convert.</p>
                        <a class='btn border-btn' data-aos-delay='600' data-aos='fade-up' href='contact.html'>Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-social banner-social-two">
            <h5 class="title">Follow us</h5>
            <ul class="list-wrap">
                <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
        <div class="banner__shape-two">
            <img src="{{ asset('assets/frontend/img/banner/h3_banner_shape01.png')}}" alt="" class="heartbeat">
        </div>
    </section>
    <!-- banner-area-end -->
      <!-- services-area -->
      <section class="services__area-seven services__bg-seven" data-background="assets/img/bg/h5_services_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">WHAT WE OFFER</span>
                        <h2 class="title">We Do World Class Work For You</h2>
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
                            <h2 class="title"><a href='services-details.html'>Marketing Plan</a></h2>
                            <p style="text-align: left">Beauis utter enim amet lacus ornare ullamcorper Praesent neque purus rhoncus.</p>
                            {{-- <a class='btn' href='services-details.html'>Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__item-five">
                        <div class="new_icon_div">
                            <i class="fa fa-globe text-white new_icon_style"></i>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title"><a href='services-details.html'>Marketing Plan</a></h2>
                            <p style="text-align: left">Beauis utter enim amet lacus ornare ullamcorper Praesent neque purus rhoncus.</p>
                            {{-- <a class='btn' href='services-details.html'>Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__item-five">
                        <div class="new_icon_div">
                            <i class="fa fa-globe text-white new_icon_style"></i>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title"><a href='services-details.html'>Marketing Plan</a></h2>
                            <p style="text-align: left">Beauis utter enim amet lacus ornare ullamcorper Praesent neque purus rhoncus.</p>
                            {{-- <a class='btn' href='services-details.html'>Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__item-five">
                        <div class="new_icon_div">
                            <i class="fa fa-globe text-white new_icon_style"></i>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title"><a href='services-details.html'>Marketing Plan</a></h2>
                            <p style="text-align: left">Beauis utter enim amet lacus ornare ullamcorper Praesent neque purus rhoncus.</p>
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
                        <p>Mauris ut enim sit amet lacus ornare ullamcorper. Praesent plaacerat neque eu purus rhoncus, vel tincidunt odio ultrices. Seed theya are feugiat elis Curabitur posuere tristique.</p>
                        <div class="row justify-content-center gutter-24">
                            <div class="col-lg-6 col-md-12">
                                <div class="services__item-three new_service_item">
                                    <div class="services__item-top">
                                        <div class="services__icon-three">
                                            <i class="flaticon-profit"></i>
                                        </div>
                                        <div class="services__item-top-title">
                                            <h2 class="title"><a href='services-details.html'>Modern Strategic Business</a></h2>
                                        </div>
                                    </div>
                                    <div class="services__content-three">
                                        <ul style="list-style-type: none; padding-left:0;">
                                            <li> <i class="fa fa-check service-icon"></i>list one</li>
                                            <li> <i class="fa fa-check service-icon"></i>list one</li>
                                            <li> <i class="fa fa-check service-icon"></i>list one</li>
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
                                            <h2 class="title"><a href='services-details.html'>Target<br> Marketing</a></h2>
                                        </div>
                                    </div>
                                    <div class="services__content-three">
                                        <ul style="list-style-type: none; padding-left:0;">
                                            <li> <i class="fa fa-check service-icon"></i>list one</li>
                                            <li> <i class="fa fa-check service-icon"></i>list one</li>
                                            <li> <i class="fa fa-check service-icon"></i>list one</li>
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
                                            <h2 class="title"><a href='services-details.html'>Finance <br>Investment</a></h2>
                                        </div>
                                    </div>
                                    <div class="services__content-three">
                                        <ul style="list-style-type: none; padding-left:0;">
                                            <li> <i class="fa fa-check service-icon"></i>list one</li>
                                            <li> <i class="fa fa-check service-icon"></i>list one</li>
                                            <li> <i class="fa fa-check service-icon"></i>list one</li>
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
                                            <h2 class="title"><a href='services-details.html'>Tax <br> Advisory</a></h2>
                                        </div>
                                    </div>
                                    <div class="services__content-three">
                                        <ul style="list-style-type: none; padding-left:0;">
                                            <li> <i class="fa fa-check service-icon"></i>list one</li>
                                            <li> <i class="fa fa-check service-icon"></i>list one</li>
                                            <li> <i class="fa fa-check service-icon"></i>list one</li>
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
                <div class="col-xl-4 col-lg-4 col-md-6 text-center">
                    <div class="services__item-five">
                        <div class="new_icon_div">
                            <i class="fa fa-globe text-white new_icon_style"></i>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title"><a href='services-details.html'>Marketing Plan</a></h2>
                            <p style="text-align: left">Beauis utter enim amet lacus ornare ullamcorper Praesent neque purus rhoncus.</p>
                            {{-- <a class='btn' href='services-details.html'>Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services__item-five">
                        <div class="new_icon_div">
                            <i class="fa fa-globe text-white new_icon_style"></i>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title"><a href='services-details.html'>Marketing Plan</a></h2>
                            <p style="text-align: left">Beauis utter enim amet lacus ornare ullamcorper Praesent neque purus rhoncus.</p>
                            {{-- <a class='btn' href='services-details.html'>Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services__item-five">
                        <div class="new_icon_div">
                            <i class="fa fa-globe text-white new_icon_style"></i>
                        </div>
                        <div class="services__content-five">
                            <h2 class="title"><a href='services-details.html'>Marketing Plan</a></h2>
                            <p style="text-align: left">Beauis utter enim amet lacus ornare ullamcorper Praesent neque purus rhoncus.</p>
                            {{-- <a class='btn' href='services-details.html'>Read More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- brand-area -->
          <div class="brand-area brand__area-two">
            <div class="container">
                <div class="swiper-container brand-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="{{ asset('assets/frontend/img/brand/brand_img01.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="{{ asset('assets/frontend/img/brand/brand_img02.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="{{ asset('assets/frontend/img/brand/brand_img03.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="{{ asset('assets/frontend/img/brand/brand_img04.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="{{ asset('assets/frontend/img/brand/brand_img05.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="{{ asset('assets/frontend/img/brand/brand_img06.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="{{ asset('assets/frontend/img/brand/brand_img03.png') }}" alt="">
                            </div>
                        </div>
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
                <h2 class="title tg-element-title">Our Additional Service</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-team-area-six">
                        <div class="card-image">
                            <img src="{{ asset('assets/frontend/img/home6/team.png')}}" />
                            <a href="#" class="btn-share"><img src="{{ asset('assets/frontend/img/home6/share.svg')}}" /></a>
                        </div>
                        <div class="card-info">
                            <div class="card-title">
                                <a href='team-details.html'>Ralph Edwards</a>
                               
                            </div>
                            <div class="card-desc">
                                Lorem ipsum dolor sit amet, adipiscing elit. Duis consectetur auctor elit vehicula onec conse tetur risus dignissim justo faubus pretium.
                            </div>
                            <div class="card-link">
                                <a href="#">Contact Me</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-team-area-six">
                        <div class="card-image">
                            <img src="{{ asset('assets/frontend/img/home6/team2.png')}}" />
                            <a href="#" class="btn-share"><img src="{{ asset('assets/frontend/img/home6/share.svg')}}" /></a>
                        </div>
                        <div class="card-info">
                            <div class="card-title">
                                <a href='team-details.html'>Ralph Edwards</a>
                               
                            </div>
                            <div class="card-desc">
                                Lorem ipsum dolor sit amet, adipiscing elit. Duis consectetur auctor elit vehicula onec conse tetur risus dignissim justo faubus pretium.
                            </div>
                            <div class="card-link">
                                <a href="#">Contact Me</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-team-area-six">
                        <div class="card-image">
                            <img src="{{ asset('assets/frontend/img/home6/team2.png')}}" />
                            <a href="#" class="btn-share"><img src="{{ asset('assets/frontend/img/home6/share.svg')}}" /></a>
                        </div>
                        <div class="card-info">
                            <div class="card-title">
                                <a href='team-details.html'>Ralph Edwards</a>
                               
                            </div>
                            <div class="card-desc">
                                Lorem ipsum dolor sit amet, adipiscing elit. Duis consectetur auctor elit vehicula onec conse tetur risus dignissim justo faubus pretium.
                            </div>
                            <div class="card-link">
                                <a href="#">Contact Me</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-team-area-six">
                        <div class="card-image">
                            <img src="{{ asset('assets/frontend/img/home6/team2.png')}}" />
                            <a href="#" class="btn-share"><img src="{{ asset('assets/frontend/img/home6/share.svg')}}" /></a>
                        </div>
                        <div class="card-info">
                            <div class="card-title">
                                <a href='team-details.html'>Ralph Edwards</a>
                               
                            </div>
                            <div class="card-desc">
                                Lorem ipsum dolor sit amet, adipiscing elit. Duis consectetur auctor elit vehicula onec conse tetur risus dignissim justo faubus pretium.
                            </div>
                            <div class="card-link">
                                <a href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class='btn' data-aos-delay='600' data-aos='fade-up' href='contact.html'>Contact Us</a>
            </div>
        </div>
    </section>
    <section class="services__area-seven services__bg-seven" data-background="{{ asset('assets/frontend/img/bg/h5_services_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title mb-50">
                        <span class="sub-title">Top Countries</span>
                        <h2 class="title" style="font-size: 30px !important">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="text-align: right">
                        <a class='btn' data-aos-delay='600' data-aos='fade-up' href='#'>View More</a>
                    </div>
                </div>
            </div>
            <div class="row gutter-24">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <a href="{{ route('countries')}}">
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
                    </a>
                   
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
                </div>
               
            </div>
        </div>
    </section>
    <!-- choose-area -->
    <!-- consulting-area -->
    <div class="row banner-container text-center">
        <div>
            <h4>VAAS</h4>
            <p>"Reliable and Affordable Visa <br>Application Assistance Services"</p>
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
                                        <p>01</p>
                                        <h6>Consultation</h6>
                                        <p>Discuss your travel plans <br>and visa requirements with <br>our experts</p>
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
                                        <p>01</p>
                                        <h6>Consultation</h6>
                                        <p>Discuss your travel plans <br>and visa requirements with <br>our experts</p>
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
                    <p class="lead-text">Experiencing <br> Traditions and <br> Customs</p>
                    <p class="lead-paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore aliquam nemo</p>
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
                                <h6>1000 +</h6>
                                <p>Visa Processed</p>
                            </div>
                        </div>
                    </div>
                    <div class="down-exp-container">
                        <div class="exp-sub-container">
                            <div class="icon">
                                <i class="fa fa-user icon-style"></i>
                            </div>
                            <div class="exp-text-container">
                                <h6>1000 +</h6>
                                <p>Visa Processed</p>
                            </div>
                        </div>
                        <div class="exp-sub-container">
                            <div class="icon">
                                <i class="fa fa-user icon-style"></i>
                            </div>
                            <div class="exp-text-container">
                                <h6>1000 +</h6>
                                <p>Visa Processed</p>
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
                        <span class="sub-title">Why We Are The Best</span>
                        <h2 class="title tg-element-title">We Offer Business Insight World Class Consulting</h2>
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
                                            <h4 class="title">Finance Planning</h4>
                                            <p>Apexa helps youcona doing <br> tempor incididunt.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="choose__list-box">
                                        <div class="choose__list-icon">
                                            <i class="flaticon-report"></i>
                                        </div>
                                        <div class="choose__list-content">
                                            <h4 class="title">Market Analysis</h4>
                                            <p>Apexa helps youcona doing <br> tempor incididunt.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="choose__list-box">
                                        <div class="choose__list-icon">
                                            <i class="flaticon-report"></i>
                                        </div>
                                        <div class="choose__list-content">
                                            <h4 class="title">Market Analysis</h4>
                                            <p>Apexa helps youcona doing <br> tempor incididunt.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="choose__list-box">
                                        <div class="choose__list-icon">
                                            <i class="flaticon-report"></i>
                                        </div>
                                        <div class="choose__list-content">
                                            <h4 class="title">Market Analysis</h4>
                                            <p>Apexa helps youcona doing <br> tempor incididunt.</p>
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
                        <img src="assets/frontend/img/images/inner_testimonial_img.png" alt="">
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
                                <div class="swiper-slide">
                                    <div class="testimonial__item-three">
                                        <div class="testimonial__rating testimonial__rating-two">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>“ Morem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, consectetur adipiscing elita Moremsit amet.</p>
                                        <div class="testimonial__bottom">
                                            <div class="testimonial__info-three">
                                                <h4 class="title">Mr.Robey Alexa</h4>
                                                <span>CEO, Moie Agency</span>
                                            </div>
                                            <div class="testimonial__icon">
                                                <img src="assets/frontend/img/icon/quote02.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__item-three">
                                        <div class="testimonial__rating testimonial__rating-two">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>“ Morem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, consectetur adipiscing elita Moremsit amet.</p>
                                        <div class="testimonial__bottom">
                                            <div class="testimonial__info-three">
                                                <h4 class="title">Kristin Watson</h4>
                                                <span>CEO,JAKS Shans</span>
                                            </div>
                                            <div class="testimonial__icon">
                                                <img src="assets/frontend/img/icon/quote02.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/frontend/img/brand/brand_img01.png') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/frontend/img/brand/brand_img02.png') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/frontend/img/brand/brand_img03.png') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/frontend/img/brand/brand_img04.png') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/frontend/img/brand/brand_img05.png') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/frontend/img/brand/brand_img06.png') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/frontend/img/brand/brand_img03.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area -->
</main>
    
@endsection