@extends('frontend.layouts.main')

@section('content')
<main class="fix">
     <!-- breadcrumb-area -->
     <section class="breadcrumb__area breadcrumb__bg mt-150" data-background="{{ asset('assets/frontend/img/bg/breadcrumb_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb__content">
                        <h2 class="title">Sign In</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href='{{ route('home')}}'>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign In</li>
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
    <section class="login__area-one">
        <div class="container">
            <div class="text-center mb-55">
                <h1 class="text-48-bold">Welcome sign in into your Account</h1>
            </div>
            <div class="box-form-login">
                <div class="head-login">
                    <h4>It is Our Great Pleasure to have you back</h4>
                    {{-- <p>Sign in with your email and password</p> --}}
                    <form action="" id="user_auth">
                    <div class="form-login">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control account" placeholder="Email Address" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                            <span class="view-password"></span>
                        </div>
                        <div class="box-forgot-pass">
                            <label>
                                <input type="checkbox" class="cb-remember" value="1" /> Remember me
                            </label>
                            <a href='#'>Forgot Password ?</a>
                        </div>
                        <div class="form-group" id="user_auth_alert">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-login" type="submit" id="user_btn">SIgn In</button>
                            {{-- <input type="submit" class="btn btn-login" value="Sign In" /> --}}
                        </div>
                        <p>Don’t have an account? <a class='link-bold' href='{{ route('sign.up')}}'>Sign up</a> now</p>
                    </div>
                </form> 
                   
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->
</main>
@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#user_auth').on('submit',function(e){
            e.preventDefault();
         var dataz =$(this).serialize();
            $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
            });
  
        $.ajax({
        type:'POST',
        url:"{{ route('authenticate.user')}}",
        data:dataz,
        success:function(response){
            console.log(response);
            // $.notify(response.message, "success");
          setTimeout(function(){
            window.location.href=response.url;
          },500);
         
        },
        error:function(response){
            console.log(response.responseText);
            if (jQuery.type(response.responseJSON.errors) == "object") {
              $('#user_auth_alert').html('');
            $.each(response.responseJSON.errors,function(key,value){
                $('#user_auth_alert').append('<div class="alert alert-danger">'+value+'</div>');
            });
            } else {
               $('#user_auth_alert').html('<div class="alert alert-danger">'+response.responseJSON.errors+'</div>');
            }
        },
        beforeSend : function(){
            $('#user_btn').html('<span class="fas fa-spinner fas-pulse fas-spin"></span> Authenticating ---');
            $('#user_btn').attr('disabled', true);
        },
       complete : function(){
            $('#user_btn').html('<span class="fas fa-sign-in-alt"></span> Sign In');
            $('#user_btn').attr('disabled', false);
        }
        });
    });
    });
  </script>  
@endpush