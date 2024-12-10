@extends('frontend.layouts.main')

@section('content')
  <!-- main-area -->
  <main class="fix">
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg mt-150" data-background="{{ asset("storage/website"."/".$service->image) }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb__content">
                        <h2 class="title">{{$service->name }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href='{{ route('home')}}'>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Service</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape">
            <img src="{{ asset('assets/frontend/img/images/breadcrumb_shape01.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/images/breadcrumb_shape02.png') }}" alt="" class="rightToLeft">
            <img src="{{ asset('assets/frontend/img/images/breadcrumb_shape03.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/images/breadcrumb_shape04.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/images/breadcrumb_shape05.png') }}" alt="" class="alltuchtopdown">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
     <!-- services-details-area -->
     <section class="services__details-area">
        <div class="container">
            <div class="services__details-wrap">
                <div class="row">
                    <div class="col-70 order-0 order-lg-2">
                        <div class="services__details-content">
                            <div class="services__details-list">
                                <div class="row">
                                   {!! $service->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-30">
                        <aside class="services__sidebar">
                             <div class="sidebar__widget">
                                <h4 class="sidebar__widget-title">Plan you trip Now</h4>
                                <div class="sidebar__brochure">
                                    <ul style="list-style-type: none; padding-left:0;">
                                        <li> <i class="fa fa-phone service-icon"></i> 255 678 678</li>
                                        <li> <i class="fa fa-envelope service-icon"></i>info@visa.com</li>
                                        <li> <i class="fa fa-map-pin service-icon"></i>Dare es salaam</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__widget sidebar__widget-two">
                                <div class="sidebar__cat-list-two">
                                    <ul class="list-wrap">
                                        @foreach ($services as $serv)
                                        <li><a href="{{ route('service.detail',$serv->uuid)}}">{{ $serv->name}}<i class="flaticon-arrow-button"></i></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                           
                            <div class="sidebar__widget sidebar__widget-two">
                                <div class="sidebar__contact">
                                    <h2 class="title">If You Need Any Help Contact With Us</h2>
                                    <a href="tel:" class="btn"><i class="flaticon-phone-call"></i>+255 755 000 000</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-details-area-end -->
</main>
<!-- main-area-end -->
@endsection
