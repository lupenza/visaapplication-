@extends('frontend.layouts.main')

@section('content')
  <!-- main-area -->
  <main class="fix">
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg mt-150" data-background="{{ asset('assets/frontend/img/bg/breadcrumb_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb__content">
                        <h2 class="title">Countries</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href='{{ route('home')}}'>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Countries</li>
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
                                    @forelse ($countries as $country)
                                    <div class="col-md-6">
                                        <a href="{{ route('get.country',$country->uuid)}}">
                                            <div class="services__details-list-box">
                                                <div>
                                                    <img style="width: 50px; border-radius: 50%; height: 50px" src="{{ asset('storage/website'.'/'.$country->image)}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h4 class="title">{{ $country->name}}</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>   
                                    @empty
                                    <div class="col-md-12">
                                        <div class="services__details-list-box">
                                            <div class="content">
                                                <h4 class="title">No data abount this Continent</h4>
                                            </div>
                                        </div>
                                    </div>   
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-30">
                        <aside class="services__sidebar">
                            <div class="sidebar__widget sidebar__widget-two">
                                <div class="sidebar__cat-list-two">
                                    <ul class="list-wrap">
                                        @foreach ($continents as $continent)
                                        <li><a href="{{ url('countries',$continent->id)}}">{{ $continent->name}}<i class="flaticon-arrow-button"></i></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="sidebar__widget">
                                <h4 class="sidebar__widget-title">Brochure</h4>
                                <div class="sidebar__brochure">
                                    <p>when an unknown printer took ga lley offer typey anddey.</p>
                                    <a href="assets/img/services/services_details01.jpg" target="_blank" download><i class="far fa-file-pdf"></i>PDF. Download</a>
                                    <a href="assets/img/services/services_details01.jpg" target="_blank" download><i class="far fa-file-alt"></i>DOC. Download</a>
                                </div>
                            </div> --}}
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
