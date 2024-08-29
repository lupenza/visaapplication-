@extends('frontend.layouts.main')

@section('content')
<main class="fix">
    <!-- about-area -->
    <section class="services__details-area mt-150">
        <div class="container">
            <div class="services__details-wrap">
                <div class="row">
                    <div class="col-70 order-0 order-lg-2">
                        <h5 class="text-center">All Payments</h5>
                        <div class="services__details-content">
                            <div class="services__details-list">
                                <div class="row">
                                  <div class="col-md-12 table-responsive">
                                    <table id="myTable" class="table table-bordered dt-responsive  nowrap w-100">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Payment Date</th>
                                            <th>Amount</th>
                                            <th>Payment Reference</th>
                                            <th>Service</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($payments as $application)
                                                <tr>
                                                    <td>{{ $loop->iteration}}</td>
                                                    <td>{{ date('Y-m-d',strtotime($application->created_at))}} </td>
                                                    <td>{{ $application->amount }}</td>
                                                    <td>{{ $application->payment_reference}}</td>
                                                    <td>{{ $application->service ?? null}}</td>
                                                    <td>{!! $application->stage_formatted_customer !!}</td>
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
