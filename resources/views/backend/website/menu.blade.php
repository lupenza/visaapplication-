@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Website Menu</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">List</a></li>
                        <li class="breadcrumb-item active">Website List</li>
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
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('service.list')}}">
                                <div class="menu-list">
                                    <div class="icon-div">
                                    <i class="fa fa-user"></i>
                                    </div>
                                    <div>
                                        <h5>Our Services</h5>
                                        <p>Create /Edit / Activate /Deactivate website services</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('testmonial.list')}}">
                                <div class="menu-list">
                                    <div class="icon-div">
                                    <i class="fa fa-user"></i>
                                    </div>
                                    <div>
                                        <h5>Testmonials </h5>
                                        <p>Create /Edit / Activate /Deactivate website Testmonials</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <a href="{{ route('countries.list')}}">
                                <div class="menu-list">
                                    <div class="icon-div">
                                    <i class="fa fa-user"></i>
                                    </div>
                                    <div>
                                        <h5>Countries </h5>
                                        <p>Create /Edit / Activate /Deactivate Countries</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('faq.list')}}">
                                <div class="menu-list">
                                    <div class="icon-div">
                                    <i class="fa fa-user"></i>
                                    </div>
                                    <div>
                                        <h5>FAQ's </h5>
                                        <p>Create /Edit / Activate /Deactivate FAQ's</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <a href="{{ route('brand.list')}}">
                                <div class="menu-list">
                                    <div class="icon-div">
                                    <i class="fa fa-user"></i>
                                    </div>
                                    <div>
                                        <h5>Brands</h5>
                                        <p>Create /Edit / Activate /Deactivate Brands</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('client.list')}}">
                                <div class="menu-list">
                                    <div class="icon-div">
                                    <i class="fa fa-user"></i>
                                    </div>
                                    <div>
                                        <h5>Clients</h5>
                                        <p>Create /Edit / Activate /Deactivate Clients</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container-fluid -->
@endsection

