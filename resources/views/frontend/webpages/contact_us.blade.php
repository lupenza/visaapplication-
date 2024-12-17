@extends('frontend.layouts.main')

@section('content')
    <main class="fix">
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg mt-150"
            data-background="{{ asset('assets/frontend/img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb__content">
                            <h2 class="title">Contact Us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href='{{ route('home') }}'>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape">
                <img src=" {{ asset('assets/frontend/img/images/breadcrumb_shape01.png') }}" alt="">
                <img src=" {{ asset('assets/frontend/img/images/breadcrumb_shape02.png') }}" alt=""
                    class="rightToLeft">
                <img src=" {{ asset('assets/frontend/img/images/breadcrumb_shape03.png') }}" alt="">
                <img src=" {{ asset('assets/frontend/img/images/breadcrumb_shape04.png') }}" alt="">
                <img src=" {{ asset('assets/frontend/img/images/breadcrumb_shape05.png') }}" alt=""
                    class="alltuchtopdown">
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- about-area -->
        <section class="about__area-four">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-9 col-sm-10">
                        <div class="about__img-wrap-four">
                            <img src="{{ asset('assets/frontend/img/images/inner_about01.jpg') }}" alt="">
                            <div class="shape">
                                <img src="{{ asset('assets/frontend/img/images/inner_about_shape.jpg') }}" alt=""
                                    class="alltuchtopdown">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-four">
                            <div class="section-title mb-30">
                                <span class="sub-title">Contact VAAS</span>
                            </div>

                            <div class="box-form-login">
                                <div class="head-login">
                                    <h4 class="mb-4">Your Trusted Partner for Seamless Visa Application Assistance</h4>
                                    {{-- <p>Sign in with your email and password</p> --}}
                                    <form action="/submit-contactus-form" id="" method="POST">
                                        @csrf
                                        <div class="form-login">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control account"
                                                    placeholder="Names" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control account"
                                                    placeholder="Email Address / Phone Number" />
                                            </div>
                                            <div class="form-group">
                                                <select name="service" id="" class="form-control">
                                                    <option value="0">-</option>
                                                    @foreach ($services as $service)
                                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <textarea name="reason" class="form-control" id="" cols="30" rows="2"
                                                    placeholder="Reason of contact if any....."></textarea>
                                            </div>
                                            <div class="form-group" id="user_auth_alert">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-login" type="submit" id="user_btn">Send</button>
                                                {{-- <input type="submit" class="btn btn-login" value="Sign In" /> --}}
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection
