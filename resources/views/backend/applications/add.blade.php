@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Application</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Application</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-12" id="reg_alert">

        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Visa Proces Information</h4>
                <form id="form-registration">
                    <input type="hidden" name="visa_type_id" value="{{$visa_id}}">
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
    <!-- end row -->
    <!-- end row -->
</div> <!-- container-fluid -->
    
@endsection
@push('scripts')
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
                window.location.reload()
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