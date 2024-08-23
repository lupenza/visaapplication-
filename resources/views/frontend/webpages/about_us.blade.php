@extends('frontend.layouts.main')

@section('content')
<main class="fix">
     <!-- breadcrumb-area -->
     <section class="breadcrumb__area breadcrumb__bg mt-150" data-background="{{ asset('assets/frontend/img/bg/breadcrumb_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb__content">
                        <h2 class="title">About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href='{{ route('home')}}'>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
        <section class="about__area-four">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-9 col-sm-10">
                        <div class="about__img-wrap-four">
                            <img src="{{ asset('assets/frontend/img/images/inner_about01.jpg')}}" alt="">
                            <img src="{{ asset('assets/frontend/img/images/inner_about02.jpg')}}" alt="">
                            <div class="about__award-box">
                                <div class="icon">
                                    <i class="flaticon-trophy"></i>
                                </div>
                                <div class="content">
                                    <h2 class="title">15+</h2>
                                    <p>World Best Agency <br> Award Got</p>
                                </div>
                            </div>
                            <div class="shape">
                                <img src="{{ asset('assets/frontend/img/images/inner_about_shape.jpg')}}" alt="" class="alltuchtopdown">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-four">
                            <div class="section-title mb-30">
                                <span class="sub-title">Simply Know About</span>
                                <h2 class="title">We Help Organizations To Make Ultimate Businesses Growth Success</h2>
                            </div>
                            <div class="about__content-inner-three">
                                <div class="about__list-box">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-arrow-button"></i>Medicare Advantage Plans</li>
                                        <li><i class="flaticon-arrow-button"></i>Analysis & Research</li>
                                        <li><i class="flaticon-arrow-button"></i>100% Secure Money Back</li>
                                    </ul>
                                </div>
                                <div class="about__list-img-two">
                                    <img src="{{ asset('assets/frontend/img/images/about_list_img02.png')}}" alt="">
                                </div>
                            </div>
                            <p>We successfully cope with tasks of varying complexityprovide longerty term guarantees and regularly master new Practice Area technol ogiesOur portfolio includes dozen</p>
                            <a class='btn' href='#'>Contact With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->
        <!-- brand-area -->
        {{-- <div class="brand__area-four">
            <div class="container">
                <div class="swiper-container brand-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="assets/img/brand/brand_img01.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="assets/img/brand/brand_img02.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="assets/img/brand/brand_img03.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="assets/img/brand/brand_img04.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="assets/img/brand/brand_img05.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="assets/img/brand/brand_img06.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img src="assets/img/brand/brand_img03.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- brand-area -->
        <!-- choose-area -->
        <section class="choose__area-four">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="choose__content-four">
                            <div class="section-title white-title mb-20">
                                <span class="sub-title">Why We Are The Best</span>
                                <h2 class="title">Digital Solutions For Your Online Business</h2>
                            </div>
                            <p>We successfully cope with tasks of varying complexity provide area longerty guarantees and regularly master new Practice Following gies heur.</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="choose__list-two">
                            <ul class="list-wrap">
                                <li>
                                    <div class="choose__list-box-two">
                                        <div class="choose__list-icon-two">
                                            <i class="flaticon-investment"></i>
                                        </div>
                                        <div class="choose__list-content-two">
                                            <h4 class="title">Business Solutions</h4>
                                            <p>Semper egetuis kelly for tellus urna area condition.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="choose__list-box-two">
                                        <div class="choose__list-icon-two">
                                            <i class="flaticon-financial-profit"></i>
                                        </div>
                                        <div class="choose__list-content-two">
                                            <h4 class="title">Finance Planning</h4>
                                            <p>Semper egetuis kelly for tellus urna area condition.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="choose__list-box-two">
                                        <div class="choose__list-icon-two">
                                            <i class="flaticon-investment-1"></i>
                                        </div>
                                        <div class="choose__list-content-two">
                                            <h4 class="title">Market Analysis</h4>
                                            <p>Semper egetuis kelly for tellus urna area condition.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="choose__list-box-two">
                                        <div class="choose__list-icon-two">
                                            <i class="flaticon-report"></i>
                                        </div>
                                        <div class="choose__list-content-two">
                                            <h4 class="title">Business Solutions</h4>
                                            <p>Semper egetuis kelly for tellus urna area condition.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="choose__shape-wrap-four">
                <img src="{{ asset('assets/frontend/img/images/inner_choose_shape01.png')}}" alt="" data-aos="fade-right" data-aos-delay="400">
                <img src="{{ asset('assets/frontend/img/images/inner_choose_shape02.png')}}" alt="" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- choose-area-end -->
        <!-- counter-area -->
        <section class="counter-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="flaticon-trophy"></i>
                            </div>
                            <div class="content">
                                <h2 class="count"><span class="odometer" data-count="45"></span>+</h2>
                                <p>Successfully <br> Completed Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="flaticon-happy"></i>
                            </div>
                            <div class="content">
                                <h2 class="count"><span class="odometer" data-count="92"></span>K</h2>
                                <p>Satisfied <br> 100% Our Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="flaticon-china"></i>
                            </div>
                            <div class="content">
                                <h2 class="count"><span class="odometer" data-count="19"></span>+</h2>
                                <p>All Over The World <br> We Are Available</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="flaticon-time"></i>
                            </div>
                            <div class="content">
                                <h2 class="count"><span class="odometer" data-count="25"></span>+</h2>
                                <p>Years of Experiences <br> To Run This Company</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="counter-shape-wrap">
                <img src="{{ asset('assets/frontend/img/images/counter_shape01.png')}}" alt="" data-aos="fade-right" data-aos-delay="400">
                <img src="{{ asset('assets/frontend/img/images/counter_shape02.png')}}" alt="" data-parallax='{"x" : 100 , "y" : -100 }'>
                <img src="{{ asset('assets/frontend/img/images/counter_shape03.png')}}" alt="" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- counter-area-end -->
        <!-- team-area -->
        <section class="team__area-four">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-40">
                            <span class="sub-title">MEET OUR TEAM</span>
                            <h2 class="title">Business Expertise Is Here <br> For You Can Trust</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="team__item-four shine-animate-item">
                            <div class="team__thumb-four shine-animate">
                                <img src="{{ asset('assets/frontend/img/team/h4_team_img01.jpg')}}" alt="">
                            </div>
                            <div class="team__content-four">
                                <h2 class="title"><a href='team-details.html'>Floyd Miles</a></h2>
                                <span>Finance Advisor</span>
                                <div class="team__social-four">
                                    <ul class="list-wrap">
                                        <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="team__item-four shine-animate-item">
                            <div class="team__thumb-four shine-animate">
                                <img src="{{ asset('assets/frontend/img/team/h4_team_img02.jpg')}}" alt="">
                            </div>
                            <div class="team__content-four">
                                <h2 class="title"><a href='team-details.html'>Ralph Edwards</a></h2>
                                <span>Finance Advisor</span>
                                <div class="team__social-four">
                                    <ul class="list-wrap">
                                        <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="team__item-four shine-animate-item">
                            <div class="team__thumb-four shine-animate">
                                <img src="{{ asset('assets/frontend/img/team/h4_team_img03.jpg')}}" alt="">
                            </div>
                            <div class="team__content-four">
                                <h2 class="title"><a href='team-details.html'>Eleanor Pena</a></h2>
                                <span>Finance Advisor</span>
                                <div class="team__social-four">
                                    <ul class="list-wrap">
                                        <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="team__item-four shine-animate-item">
                            <div class="team__thumb-four shine-animate">
                                <img src="{{ asset('assets/frontend/img/team/h4_team_img04.jpg')}}" alt="">
                            </div>
                            <div class="team__content-four">
                                <h2 class="title"><a href='team-details.html'>Jone Cooper</a></h2>
                                <span>Finance Advisor</span>
                                <div class="team__social-four">
                                    <ul class="list-wrap">
                                        <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-area-end -->
</main>
@endsection
