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
                <div class="col-lg-6">
                    <div class="visa_requirement">
                        <h5>CHECK VISA REQUIREMENTAS</h5>
                        <p>AND APPLY</p>
                        <form action="">
                            <div class="form-group text-center">
                                <label for="">Applying Country</label><br>
                                <select name="country_id" id="country_id" class="form-component">
                                    <option value="">select a country</option>
                                    @foreach ($visa_types as $item)
                                    <option value="{{ $item->id}}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                    <h6 class="title tg-element-title">Visa Application Assistance System </h6>
                    <p class="title_caption">You take care of your trip ,we take care of your visa</p>
                    <h6 class="title tg-element-title">Apply for your visa in 3 easy steps </h6>
                    <div class="choose__content-three">
                        <div class="choose__list">
                            <ul class="list-wrap">
                                <li>
                                    <div class="choose__list-box">
                                        <div class="choose__list-icon">
                                            <i class="flaticon-financial-profit"></i>
                                        </div>
                                        <div class="choose__list-content">
                                            <h4 class="title">Fill the application form</h4>
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
                                            <h4 class="title">Register an online payment</h4>
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
                                            <h4 class="title">Check your inbox</h4>
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
