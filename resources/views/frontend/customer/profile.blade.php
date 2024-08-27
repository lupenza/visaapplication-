@extends('frontend.layouts.main')

@section('content')
<style>
      .table th{
        background-color: aliceblue
    }
</style>
<main class="fix">
    <section class="services__details-area mt-150">
        <div class="container">
            <div class="services__details-wrap">
                <div class="row">
                    <div class="col-70 order-0 order-lg-2">
                        <div class="services__details-content">
                            <div class="services__details-list">
                                <div class="row">
                                  <div class="col-md-12 table-responsive">
                                    <h5 class="text-center mb-3" >Application Profile ({{ $profile->applied_service }})</h5>
                                    <table class="table">
                                        <tbody>
                                            {{-- @foreach ($profile->question_answers as $data)
                                                <tr>
                                                    <th>{{ $data->question?->name}}</th>
                                                    <td>{{ $data->answer }}</td>
                                                </tr>   
                                            @endforeach --}}
                                            @foreach ($profile->question_answers->chunk(2) as $dataChunk)
                                            <tr>
                                                @foreach ($dataChunk as $data)
                                                    <th>{{ $data->question?->name }}</th>
                                                    <td>{{ $data->answer }}</td>
                                                @endforeach
                                            </tr>   
                                            @endforeach
                                        </tbody>
                                    </table>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @include('frontend.customer.includes.sidebar')
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@push('scripts')
<script>
    let table = new DataTable('#myTable');
</script>
    
@endpush
