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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Visa Proces Information</h4>

                    <div id="basic-example">
                        <!-- Seller Details -->
                        <h3>1. Basic Information</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Maritial Status</label>
                                            <select name="maritial_status" class="form-control">
                                                <option value="1">Married</option>
                                                <option value="2">Single</option>
                                                <option value="3">Divorce</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-lastname-input">Date of Birth</label>
                                            <input type="date" class="form-control" name="dob">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Do you hold or have any other nationality ?</label>
                                            <select name="maritial_status" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Are you permanent residence of a country other than your country of origin ?</label>
                                            <select name="maritial_status" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Country/Region</label>
                                            <select name="maritial_status" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Tanzania</option>
                                                <option value="0">America</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">City</label>
                                            <select name="maritial_status" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Dar es salaam</option>
                                                <option value="0">America</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Street</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Email <sub>At this email you will receive visa</sub></label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Contact Phone number</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Have you ever lost a passport or had one stolen ?</label>
                                            <select name="stolen_passport" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Yes</option>
                                                <option value="0">no</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Purpose of the trip to US</label>
                                            <select name="purpose_of_trip" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">School</option>
                                                <option value="0">Tourism</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Date of Arrival in U.S</label>
                                            <input type="date" name="arrival_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Date of Departure from U.S</label>
                                            <input type="date" name="departure_date" class="form-control">
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Arrival City</label>
                                            <select name="arrival_city" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Tanzania</option>
                                                <option value="0">America</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Street address at U.s</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">postal Code</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h6>Personal/Entity paying for your trip:(self/sponsor)</h6>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Phone number</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Relationship</label>
                                            <select name="arrival_city" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Tanzania</option>
                                                <option value="0">America</option>
                                            </select>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-address-input">Address of the part paying is the same as your Home?</label>
                                            <input class="form-control"  placeholder="Enter Your Address"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Would you like to add Insurance?</label>
                                            <select name="arrival_city" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Select Insurance?</label>
                                            <select name="arrival_city" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Insurance 1</option>
                                                <option value="1">Insurance 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-address-input">Upload Passport</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <input type="checkbox">
                                        <label for="">I accept Terms and condition</label>
                                    </div>

                                </div>
                            </form>
                        </section>

                        <!-- Company Document -->
                        <h3>2. Additional Information (1)</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="basicpill-lastname-input">Payers Address</label>
                                            <input type="text" class="form-control" name="payer_address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Have you ever been to U.S ?</label>
                                            <select name="maritial_status" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Are there any other people travelling with you ?</label>
                                            <select name="maritial_status" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Have you ever been issue a U.S Visa ?</label>
                                            <select name="maritial_status" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Have you refused a US Visa</label>
                                            <select name="maritial_status" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Yes/option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h6>U.S Contact Information (If Available)</h6>
                                    </div>  
                                </div> 
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Contact Person Name</label>
                                           <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Address</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Organization name</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Relationship</label>
                                           <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Phone Number</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Email</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h6>Familiy Information</h6>
                                    </div>  
                                </div> 
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Father's Surname</label>
                                           <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Father's Given name</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Father's DOB</label>
                                            <input type="date" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Is your Father in U.S</label>
                                            <select name="arrival_city" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Mother's Surname</label>
                                           <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Mother's Given name</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Mother's DOB</label>
                                            <input type="date" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Is your Mother in U.S</label>
                                            <select name="arrival_city" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">Do you have any immediate relative other than parent in U.S</label>
                                                <select name="arrival_city" class="form-control">
                                                    <option value="" ></option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </section>
                        <!-- Company Document -->
                        <h3>2. Additional Information (2)</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">Do you have any immediate relative leve in U.S</label>
                                                <select name="arrival_city" class="form-control">
                                                    <option value="" ></option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h6>Spouse Detail</h6>
                                    </div>  
                                </div> 
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Spouse Name</label>
                                           <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Spouse DOB</label>
                                            <input type="date" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Spouse Nationality</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Spouse City Of Birth</label>
                                           <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Spouse Country Of Birth</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Spouse Address</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h6>Work Education Training Information</h6>
                                    </div>  
                                </div> 
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Employer Phone number </label>
                                           <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Monthly Salary</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Describe your duties</label>
                                            <input type="date" name="street" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Were you previous employed ?</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Highest Level of Education</label>
                                            <input type="date" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Address</label>
                                            <input type="date" name="street" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">Do you belong to a clan /tribe</label>
                                                <select name="arrival_city" class="form-control">
                                                    <option value="" ></option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">List of Languages you speak?</label>
                                                <select name="arrival_city" class="form-control">
                                                    <option value="" ></option>
                                                    <option value="1">English</option>
                                                    <option value="0">Swahili</option>
                                                </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">List of countries you travelled within 5 years</label>
                                                <select name="arrival_city" class="form-control">
                                                    <option value="" ></option>
                                                    <option value="1">China</option>
                                                    <option value="0">Palestina</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">Have you belong to any professional or charitable organization ?</label>
                                                <select name="arrival_city" class="form-control">
                                                    <option value="" ></option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">Do you have any specialized skills</label>
                                                <select name="arrival_city" class="form-control">
                                                    <option value="" ></option>
                                                    <option value="1">Ngumi</option>
                                                    <option value="0">Mateke</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">Have you sereved military ?</label>
                                                <select name="arrival_city" class="form-control">
                                                    <option value="" ></option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </section>
                        <!-- Confirm Details -->
                        <h3>Confirm Detail</h3>
                        <section>
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="text-center">
                                        <div class="mb-4">
                                            <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                        </div>
                                        <div>
                                            <h5>Confirm Detail</h5>
                                            <p class="text-muted">If several languages coalesce, the grammar of the resulting</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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