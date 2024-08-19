@extends('frontend.layouts.main')

@section('content')
<main class="fix">
     <!-- breadcrumb-area -->
     <section class="breadcrumb__area breadcrumb__bg mt-150" data-background="{{ asset('assets/frontend/img/bg/breadcrumb_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb__content">
                        <h2 class="title">faq</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href='{{ route('home')}}'>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">faq</li>
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
    <section class="pricing__area pricing__bg" data-background="assets/frontend/img/bg/pricing_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-30">
                        <h2 class="title">Frequently asked questionsu</h2>
                    </div>
                </div>
            </div>
            <div class="pricing__item-wrap">
                <div class="row">
                    @forelse ($faqs as $faq)
                    <div class="col-lg-6 mb-30">
                        <div class="box-faq-right">
                            <div class="block-faqs">
                                <div class="accordion wow fadeInUp" id="accordionFAQ">
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="heading{{ $faq->id }}">
                                            <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true" aria-controls="collapse{{ $faq->id }}">
                                            {{ $faq->name }}
                                            </button>
                                        </h5>
                                        <div class="accordion-collapse collapse" id="collapse{{ $faq->id }}" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionFAQ">
                                            <div class="accordion-body">{!! $faq->description !!}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
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
