@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Countries</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">List</a></li>
                        <li class="breadcrumb-item active">Countries List</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body ">
                    <h4 class="card-title text-center" >Countries</h4>
                    <div style="display: flex; flex-direction: row; justify-content:flex-end; padding: 5px 0px 5px 0px">
                        <a href="{{ route('country.create')}}">
                        <button class="btn btn-primary btn-sm waves-effect waves-light"> <span class="fa fa-plus font-size-15"></span> Add Country</button>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Created At</th>
                                <th>Country</th>
                                <th>Continent</th>
                                <th>Country Attribute</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($countries as $item)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $item->created_at}} </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->continent?->name }}</td>
                                        <td>{!! $item->country_attribute !!}</td>
                                        <td>{!! $item->status_formatted !!}</td>
                                        <td>
                                            <a href="{{ route('edit.country',$item->uuid)}}">
                                             <button class="btn btn-primary btn-sm"  title="Edit"><i class="fa fa-edit"></i></button>
                                            </a>
                                            <button class="btn btn-danger btn-sm" id="{{ $item->uuid }}" onclick="deleteCountry(id)" title="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                               
                            </tbody>
                           
                        </table>
                    </div>
                   

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container-fluid -->
@endsection
@push('scripts')
<script>
     function deleteCountry(id){
        Swal.fire({
            title: "Delete Country?",
            text: "Are you Sure You want to delete this !",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            confirmButtonClass: "btn btn-success mt-2",
            cancelButtonClass: "btn btn-danger ms-2 mt-2",
            buttonsStyling: !1,
        }).then(function (t) {
            if (t.value) {
                var csrf_tokken =$('meta[name="csrf-token"]').attr('content');
                $.ajax({
                        url: "{{ route('country.destroy')}}", 
                        method: "POST",
                        data: {uuid:id,'_token':csrf_tokken},
                        success: function(response)
                    { 
                    // console.log(response); 
                        // $.notify(response.message, "success");
                        Swal.fire({ title: "Deleted!", text: response.message, icon: "success" })
                        setTimeout(function(){
                            location.reload();
                        },500);
                        },
                        error: function(response){
                        Swal.fire({ title: "Deleted!", text: response.responseJson.errors, icon: "warning" })

                         console.log(response.responseText);
                         //   $.notify(response.responseJson.errors,'error');  
                        }
                    });
            }
        });
  }
</script>
    
@endpush
