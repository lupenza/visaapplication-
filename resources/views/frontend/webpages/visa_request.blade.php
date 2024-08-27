@extends('frontend.layouts.main')

@section('content')
<style>

.form-wizard-wrapper label {
    font-size: 14px;
    text-align: right
}

.wizard .steps>ul {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

@media (max-width:1199.98px) {
    .wizard .steps>ul {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }
}

.wizard .steps>ul>a,
.wizard .steps>ul>li {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1
}

.wizard .steps>ul>li {
    width: 100%
}

.wizard .steps>ul>li a {
    display: block;
    padding: .5rem 1rem;
    color: var(--bs-gray-600);
    font-weight: 500;
    background-color: rgba(85, 110, 230, .1)
}

.wizard .steps>ul .current-info {
    position: absolute;
    left: -999em
}

.wizard .steps .number {
    display: inline-block;
    width: 38px;
    height: 38px;
    line-height: 34px;
    border: 2px solid #556ee6;
    color: #556ee6;
    text-align: center;
    border-radius: 50%;
    margin-right: .5rem
}

.wizard .steps .current a,
.wizard .steps .current a:active,
.wizard .steps .current a:hover {
    background-color: rgba(85, 110, 230, .2);
    color: var(--bs-gray-700)
}

.wizard .steps .current a .number,
.wizard .steps .current a:active .number,
.wizard .steps .current a:hover .number {
    background-color: #556ee6;
    color: #fff
}

.wizard>.content {
    background-color: transparent;
    padding: 14px;
    margin-top: 0;
    border-radius: 0;
    min-height: 150px
}

.wizard>.content>.title {
    position: absolute;
    left: -999em
}

.wizard>.content>.body {
    width: 100%;
    height: 100%;
    padding: 14px 0 0;
    position: static
}

.wizard>.actions {
    position: relative;
    display: block;
    text-align: right;
    width: 100%
}

.wizard>.actions>ul {
    display: block;
    text-align: right;
    padding-left: 0
}

.wizard>.actions>ul>li {
    display: inline-block;
    margin: 0 .5em
}

.wizard>.actions a,
.wizard>.actions a:active,
.wizard>.actions a:hover {
    background-color: #556ee6;
    border-radius: 4px;
    padding: 8px 15px;
    color: #fff
}

.wizard>.actions .disabled a,
.wizard>.actions .disabled a:active,
.wizard>.actions .disabled a:hover {
    opacity: .65;
    background-color: #556ee6;
    color: #fff;
    cursor: not-allowed
}

.wizard.vertical-wizard {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}

.wizard.vertical-wizard .steps>ul {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column
}

.wizard.vertical-wizard .steps>ul>li {
    width: 100% !important
}

.wizard.vertical-wizard .actions,
.wizard.vertical-wizard .content,
.wizard.vertical-wizard .steps {
    width: 100%
}

@media (min-width:1200px) {
    .wizard.vertical-wizard .steps {
        width: 25%
    }
}

.wizard.vertical-wizard .content {
    padding: 24px
}

@media (min-width:1200px) {
    .wizard.vertical-wizard .content {
        width: 75%;
        padding: 12px 24px
    }
}

.wizard.vertical-wizard .content>.body {
    padding: 0
}
</style>
<main class="fix">
     <!-- breadcrumb-area -->
     <section class="breadcrumb__area breadcrumb__bg mt-150" data-background="{{ asset('assets/frontend/img/bg/breadcrumb_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb__content">
                        <h2 class="title">Visa Request</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href='{{ route('home')}}'>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Visa Request</li>
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

    <div class="row pl-40 pr-40 mt-5 mb-5">
        <div class="col-md-12" id="reg_alert">

        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Visa Proces Information</h4>
                <form id="form-registration">
                    <input type="hidden" name="visa_type_id" value="{{$visa_type_id}}">
                    <input type="hidden" name="country_id" value="{{$country_id}}">
                    <input type="hidden" name="plan_id" value="{{$plan_id}}">
                    <div id="basic-example">
                        <!-- Seller Details -->
                        @if ($questions->where('section',1)->count())
                        <h3>1. Basic Information</h3>
                        <section>
                            <div class="form-group row">
                                @foreach ($questions->where('section',1) as $question)
                                <div class="col-md-6 mt-3">
                                    <label for="">{{ $question->name }}</label>
                                    @if ($question->input_type == "select")
                                      <select name="{{$question->id}}" class="form-control" {{$question->rule == 1 ? "required":""}}>
                                        <option value="">Please select</option>
                                        @php
                                            $our_options =explode(',',$question->options);
                                        @endphp
                                        @foreach ($our_options as $option)
                                            <option value="{{ $option}}">{{ $option }}</option>
                                        @endforeach
                                    </select> 
                                     
                                    @elseif($question->input_type == "textarea")
                                       <textarea name="{{$question->id}}" class="form-control" {{$question->rule == 1 ? "required":""}}></textarea> 
                                    @else
                                    <input type="{{$question->input_type}}" name="{{$question->id}}" class="form-control" {{$question->rule == 1 ? "required":""}}>
                                    @endif

                                </div>
                                @endforeach
                            </div>
                           
                        </section>  
                        @endif
                        @if ($questions->where('section',2)->count())
                        <h3>2. Additional Information (1)</h3>
                        <section>
                            <div class="form-group row">
                                @foreach ($questions->where('section',2) as $question)
                                <div class="col-md-6 mt-3">
                                    <label for="">{{ $question->name }}</label>
                                    @if ($question->input_type == "select")
                                      <select name="{{$question->id}}" class="form-control" {{$question->rule == 1 ? "required":""}}>
                                        <option value="">Please select</option>
                                        @php
                                            $our_options =explode(',',$question->options);
                                        @endphp
                                        @foreach ($our_options as $option)
                                            <option value="{{ $option}}">{{ $option }}</option>
                                        @endforeach
                                    </select> 
                                     
                                    @elseif($question->input_type == "textarea")
                                       <textarea name="{{$question->id}}" class="form-control" {{$question->rule == 1 ? "required":""}}></textarea> 
                                    @else
                                    <input type="{{$question->input_type}}" name="{{$question->id}}" class="form-control" {{$question->rule == 1 ? "required":""}}>
                                    @endif

                                </div>
                                @endforeach
                            </div>
                           
                        </section>  
                        @endif
                        @if ($questions->where('section',3)->count())
                        <h3>3. Other Informations</h3>
                        <section>
                            <div class="form-group row">
                                @foreach ($questions->where('section',3) as $question)
                                <div class="col-md-6 mt-3">
                                    <label for="">{{ $question->name }}</label>
                                    @if ($question->input_type == "select")
                                      <select name="{{$question->id}}" class="form-control" {{$question->rule == 1 ? "required":""}}>
                                        <option value="">Please select</option>
                                        @php
                                            $our_options =explode(',',$question->options);
                                        @endphp
                                        @foreach ($our_options as $option)
                                            <option value="{{ $option}}">{{ $option }}</option>
                                        @endforeach
                                    </select> 
                                     
                                    @elseif($question->input_type == "textarea")
                                       <textarea name="{{$question->id}}" class="form-control" {{$question->rule == 1 ? "required":""}}></textarea> 
                                    @else
                                    <input type="{{$question->input_type}}" name="{{$question->id}}" class="form-control" {{$question->rule == 1 ? "required":""}}>
                                    @endif

                                </div>
                                @endforeach
                            </div>
                           
                        </section>  
                        @endif
                    </form>
                    </div>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
  
</main>
@endsection
@push('scripts')
<script src="{{ asset('assets/backend/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>
<script>
    $(function () {
    $("#basic-example").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slide",
        stepsOrientation: "vertical",
        onFinished: function () {
            submitVerticalForm();
        },
    });
});

function submitVerticalForm() {
    const personal_info = $('#form-registration').serialize();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'POST',
        url: "{{ route('visa.store') }}",
        data: personal_info,
        // contentType: false,
        // cache: false,
        // processData : false,
        success: function (response) {
            console.log(response);
            $('#reg_alert').html('<div class="alert alert-success">' + response.message + '</div>');
            setTimeout(function () {
                window.location.href ="{{ route('customer.application')}}"
            }, 500);
        },
        error: function (response) {
            console.log(response);
            console.log(response.responseText);
            // Display errors
            if (response.responseJSON && response.responseJSON.errors) {
                $('#reg_alert').html('');
                $.each(response.responseJSON.errors, function (key, value) {
                    $('#reg_alert').append('<div class="alert alert-danger">' + value + '</div>');
                });
            } else {
                $('#reg_alert').html('<div class="alert alert-danger">An error occurred. Please try again.</div>');
            }
        },
        beforeSend: function () {
            $('#update_btn').html('<i class="fa fa-spinner fa-pulse fa-spin"></i> Loading...........');
            $('#update_btn').attr('disabled', true);
        },
        complete: function () {
            $('#update_btn').html('<i class="fa fa-edit"></i> Update');
            $('#update_btn').attr('disabled', false);
        }
    });
}

    
 </script>
    
    
@endpush
