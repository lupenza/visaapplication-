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
                        <h2 class="title">Edit Service</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href='{{ route('home')}}'>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Service</li>
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
    <section class="register__area-one">
        <div class="container">
            <div class="text-center mb-20">
                <h6 class="text-48-bold">Please Fill All Required Fields</h6>
            </div>
            <div class="box-form-login">
                <form action="" id="from_reg">
                <div class="head-login">
                    <div class="form-login">
                        <input type="hidden" name="application_id" value="{{ $profile->id }}">
                        @foreach ($questions as $question)
                        <div class="form-group">
                            <label for="">{{ $question->name }} <span class="text-danger">{{$question->rule == 1 ? "*":""}}</span> </label>
                            @if ($question->input_type == "select")
                              <select name="{{$question->id}}" class="form-control" {{$question->rule == 1 ? "required":""}}>
                                <option value="{{ $profile->question_answers()->where('question_id',$question->id)->first()?->answer}}">{{ $profile->question_answers()->where('question_id',$question->id)->first()?->answer}}</option>
                                @php
                                    $our_options =explode(',',$question->options);
                                @endphp
                                @foreach ($our_options as $option)
                                    <option value="{{ $option}}">{{ $option }}</option>
                                @endforeach
                            </select> 
                             
                            @elseif($question->input_type == "textarea")
                               <textarea name="{{$question->id}}" class="form-control" {{$question->rule == 1 ? "required":""}} value="{{ $profile->question_answers()->where('question_id',$question->id)->first()?->answer}}">{{ $profile->question_answers()->where('question_id',$question->id)->first()?->answer}}</textarea> 
                            @else
                            <input type="{{$question->input_type}}" name="{{$question->id}}" class="form-control" {{$question->rule == 1 ? "required":""}} value="{{ $profile->question_answers()->where('question_id',$question->id)->first()?->answer}}">
                            @endif
                        </div>
                        @endforeach
                        <div class="form-group" id="from_reg_alert">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-login" type="submit" id="user_btn">Edit</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>
    <!-- about-area-end -->
</main>
<!-- main-area-end -->
    
@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#from_reg').on('submit',function(e){
            e.preventDefault();
         var dataz =$(this).serialize();
            $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
            });
  
        $.ajax({
        type:'POST',
        url:"{{ route('additional.service.update')}}",
        data:dataz,
        success:function(response){
            console.log(response);
            $('#from_reg_alert').append('<div class="alert alert-success">'+response.message+'</div>');
          setTimeout(function(){
            window.location.href="{{ route('customer.application')}}";
          },500);
         
        },
        error:function(response){
            console.log(response.responseText);
            if (jQuery.type(response.responseJSON.errors) == "object") {
              $('#from_reg_alert').html('');
            $.each(response.responseJSON.errors,function(key,value){
                $('#from_reg_alert').append('<div class="alert alert-danger">'+value+'</div>');
            });
            } else {
               $('#from_reg_alert').html('<div class="alert alert-danger">'+response.responseJSON.errors+'</div>');
            }
        },
        beforeSend : function(){
            $('#user_btn').html('<span class="fas fa-spinner fas-pulse fas-spin"></span> Loading ---');
            $('#user_btn').attr('disabled', true);
        },
       complete : function(){
            $('#user_btn').html('<span class="fas fa-sign-in-alt"></span> Sign Up Now');
            $('#user_btn').attr('disabled', false);
        }
        });
    });
    });
  </script>  
@endpush