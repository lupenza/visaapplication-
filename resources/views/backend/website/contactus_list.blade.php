@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Contact Us</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">List</a></li>
                        <li class="breadcrumb-item active">Contact Us List</li>
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
                    <h4 class="card-title text-center" >FAQ</h4>
                    <div style="display: flex; flex-direction: row; justify-content:flex-end; padding: 5px 0px 5px 0px"> 
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Contact person</th>
                                <th>Contacts</th>
                                <th>Service</th>
                                <th>Reason</th>
                                <th>Status</th> 
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact) 
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $contact->name}} </td>
                                        <td>{{ $contact->contacts}} </td>
                                        <td>{{ $contact->service }}</td>
                                        <td>{!! $contact->reason !!}</td>
                                        <td>{!! $contact->status_formatted !!}</td>
                                        <td>  </td>
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
     function deleteFaq(id){
        Swal.fire({
            title: "Delete FAQ ?",
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
                        url: "{{ route('faq.destroy')}}", 
                        method: "POST",
                        data: {uuid:id,'_token':csrf_tokken,action:'approve'},
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
                            console.log(response.responseText);
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

