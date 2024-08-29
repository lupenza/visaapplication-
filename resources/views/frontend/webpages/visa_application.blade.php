@extends('frontend.layouts.main')

@section('content')
<main class="fix">
     <!-- breadcrumb-area -->
     <section class="breadcrumb__area breadcrumb__bg mt-150" data-background="{{ asset('assets/frontend/img/bg/breadcrumb_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb__content">
                        <h2 class="title">Visa Application</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href='{{ route('home')}}'>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">VIsa Application</li>
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
    <section class="choose__area-three" style="padding-top: 30px !important">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                @if(session('message'))
                <div class="alert alert-warning">
                    {{ session('message') }}
                </div>
               @endif 
                {{-- <div class="col-lg-12 text-center">
                    <div class="section-title mb-25 tg-heading-subheading animation-style3">
                        <h2 class="title tg-element-title">We Offer Business Insight World Class Consulting</h2>
                    </div>
                </div> --}}
                <div class="col-lg-6 text-center">
                    @foreach ($services as $service)
                        @if ($service->id == 1)
                        <a href="{{ route('get.paid.service',$service->uuid)}}">
                            <div class="visa_requirement">
                                <h5>{{ $service->name }}</h5>
                                <p>{{ $service->description}}</p>
                                <button class="btn btn-primary text-center">Apply Now</button>
                            </div> 
                        </a>
                       
                        @endif
                    @endforeach
                    
                    <h5 class="title tg-element-title mt-4 text-center">Other Services</h5>
                    <div class="choose__content-three">
                        <div class="choose__list">
                            <ul class="list-wrap">
                                @foreach ($services as $item)
                                    @if ($item->id != 1)
                                    <a href="{{ route('get.paid.service',$item->uuid)}}">
                                        <li>
                                            <div class="choose__list-box">
                                                <div class="choose__list-icon">
                                                    <i class="flaticon-financial-profit"></i>
                                                </div>
                                                <div class="choose__list-content">
                                                    <h4 class="title">{{ $item->name }}</h4>
                                                    <p>{{ $item->description }}</p>
                                                </div>
                                            </div>
                                        </li> 
                                    </a>
                                   
                                    @endif 
                                @endforeach
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
</main>
@endsection
@push('scripts')
<script>
    $('#country_id').on('change',function(){
        var id =$(this).val();
        window.location.href ="{{ url('application/create')}}"+"/" + id;
    })
</script>
    
@endpush
