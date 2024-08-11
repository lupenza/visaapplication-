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
                            <form id="personal_info">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>Personal Information</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">  Maritial Status <span class="text-danger">*</span></label>
                                            <select name="maritial_status" class="form-control">
                                                <option value="">please select</option>
                                                <option value="1">Married</option>
                                                <option value="2">Single</option>
                                                <option value="3">Divorce</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">  Do you hold or have you held any other nationality ? <span class="text-danger">*</span></label>
                                            <select name="passport_held" class="form-control">
                                                <option value="" >Please Select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Are you a permanent resident of a country/region other than your country/region of origin (nationality) ? <span class="text-danger">*</span></label>
                                            <select name="permanent_residence" class="form-control">
                                                <option value="" >Please select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 wizard-header text-center">
                                        <h5>Address and Contact Information</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Country/Region</label>
                                            <select name="home_country" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Tanzania</option>
                                                <option value="0">America</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">City</label>
                                            <select name="home_city" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Dar es salaam</option>
                                                <option value="0">America</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Street</label>
                                            <input type="text" name="home_street" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Email <sub>At this email you will receive visa</sub></label>
                                            <input type="email" name="primary_email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Primary Phone number</label>
                                            <input type="number" name="primary_phone_number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 wizard-header text-center">
                                        <h5>Passport/Travel Document Information</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Have you ever lost a passport or had one stolen ?</label>
                                            <select name="stolen_passport" class="form-control">
                                                <option value="" >Please Select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">no</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 wizard-header text-center">
                                        <h5>Travel Information</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Purpose of the trip to US</label>
                                            <select name="purpose_of_trip" class="form-control">
                                                <option value="" ></option>
                                                <option value="Business">Business</option>
                                                <option value="Tourism">Tourism</option>
                                                <option value="Family or Friend Visit">Family or Friend Visit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Provide a complete itinerary for your travel to the U.S</p>
                                    </div>
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
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Arrival City</label>
                                            <select name="arrival_city" class="form-control">
                                                <option value="" ></option>
                                                <option value="1">Tanzania</option>
                                                <option value="0">America</option>
                                            </select>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Address where you will stay in the U.S</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Street Address</label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">City, State, Postal/Zip Code</label>
                                            <input type="text" name="postal_code" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 wizard-header text-center">
                                        <h5>Person/Entity Paying for Your Trip: (Self/Sponsor)
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Name</label>
                                            <input type="text" name="payer_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Phone number</label>
                                            <input type="number" name="payer_phone_number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Email</label>
                                            <input type="email" name="payer_email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Relationship</label>
                                           <input type="text" class="form-control" name="payer_relationship">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Is the address of the party paying for your trip the same as your Home or Mailing Address ?</label>
                                        <select name="address_equality" class="form-control">
                                            <option value="">please choose</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 wizard-header text-center">
                                        <h5> Payer's Address:
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Street Address</label>
                                            <input type="text" name="payer_street_address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">City</label>
                                            <input type="text" name="payer_city" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">State/Province</label>
                                            <input type="email" name="payer_state" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Postal Zone/ZIP Code</label>
                                           <input type="text" class="form-control" name="payer_postal_code">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Country/Region</label>
                                           <input type="text" class="form-control" name="payer_country">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Would you like to add Insurance?</label>
                                            <select name="insurance" class="form-control">
                                                <option value="" >please select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Select Insurance</label>
                                            <select name="insurance_name" class="form-control">
                                                <option value="" >please select</option>
                                                <option value="1">Insurance 1</option>
                                                <option value="1">Insurance 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-address-input">Upload Passport</label>
                                            <input type="file" name="passport" class="form-control">
                                        </div>
                                    </div> --}}
                                </div>
                              
                            </form>
                        </section>

                        <!-- Company Document -->
                        <h3>2. Additional Information (1)</h3>
                        <section>
                            <form id="addition_info_one">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Are there other people traveling with you?</label>
                                            <select name="other_people_travel" class="form-control">
                                                <option value="" >please select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Have you ever been to the U.S.?</label>
                                            <select name="have_been_us" class="form-control">
                                                <option value="" >please select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Have you ever been issued a U.S. visa ?</label>
                                            <select name="have_you_own_us_visa" class="form-control">
                                                <option value="" >please select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Have you ever been refused a U.S. Visa ?</label>
                                            <select name="refused_us_visa" class="form-control">
                                                <option value="" >please select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 wizard-header text-center">
                                        <h5> U.S. Contact Information/Hotel (if available)
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Contact Person’s name in the U.S </label>
                                           <input type="text" name="us_contact_person" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Address</label>
                                            <input type="text" name="us_contact_address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Organization name</label>
                                            <input type="text" name="us_contact_organization" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Relationship</label>
                                           <input type="text" name="us_contact_relationship" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Phone Number</label>
                                            <input type="text" name="us_contact_phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Email</label>
                                            <input type="text" name="us_contact_email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 wizard-header text-center">
                                        <h5>Familiy Information
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Father's Surname</label>
                                           <input type="text" name="father_surname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Father's Given name</label>
                                            <input type="text"  name="father_given_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Father's DOB</label>
                                            <input type="date" name="father_dob" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Is your Father in U.S ?</label>
                                            <select name="is_father_in_us" class="form-control">
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
                                           <input type="text" name="mother_surname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Mother's Given name</label>
                                            <input type="text"  name="mother_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Mother's DOB</label>
                                            <input type="date" name="mother_dob" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Is your Mother in U.S</label>
                                            <select name="is_mother_in_us" class="form-control">
                                                <option value="" >please select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">Do you have any immediate relative other than parent in U.S</label>
                                                <select name="other_imemediate_relative_in_us" class="form-control">
                                                    <option value="" ></option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Do you have any other relatives in the United States ?</label>
                                            <select name="other_relative_in_us" class="form-control">
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
                                            <label for="basicpill-firstname-input">Spouse Name</label>
                                           <input type="text" name="spouse_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Spouse DOB</label>
                                            <input type="date" name="spouse_dob" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Spouse Nationality</label>
                                            <input type="text" name="spouse_nationality" name="street" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Spouse City Of Birth</label>
                                           <input type="text" name="spouse_city" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Spouse Country Of Birth</label>
                                            <input type="text"  name="spouse_origin" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Spouse Address</label>
                                            <input type="text" name="spouse_address" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                        <!-- Company Document -->
                        <h3>2. Additional Information (2)</h3>
                        <section>
                            <form id="addition_info_two">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h6>Work/Education/Training Information</h6>
                                    </div>  
                                </div> 
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Primary Occupation </label>
                                           <input type="text" name="primary_occupation" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Present Employer or School Name</label>
                                            <input type="text" name="present_employer" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Employer’s Address</label>
                                            <input type="text" name="employer_duties" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Employer’s Phone Number?</label>
                                            <input type="text" name="employer_phone_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Monthly Salary (if employed)</label>
                                            <input type="number" name="monthly_salary" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Were you previously employed?</label>
                                            <select name="previously_employed" class="form-control">
                                                <option value="">please select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Briefly Describe your Duties</label>
                                        <textarea name="duties" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center wizard-header">
                                        <h6>Other Details</h6>
                                    </div>  
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Highest level of Education?</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">Education Institution/College Name</label>
                                                <select name="college_name" class="form-control">
                                                    <option value="" >please select</option>
                                                    <option value="1">UDSM</option>
                                                    <option value="0">UDOM</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">Address</label>
                                                <input type="text" class="form-control" name="college_address" id="">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">Do you belong to a clan /tribe ?</label>
                                                <select name="clan" class="form-control">
                                                    <option value="" >please select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">List of Languages you speak?</label>
                                                <select name="languages" class="form-control" multiple>
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
                                                <select name="visited_city" class="form-control" multiple>
                                                    <option value="" ></option>
                                                    <option value="China">China</option>
                                                    <option value="Palestina">Palestina</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">Have you belong to any professional or charitable organization ?</label>
                                                <select name="social_contribution" class="form-control">
                                                    <option value="" >please select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">Do you have any specialized skills ?</label>
                                                <select name="specialized_skill" class="form-control">
                                                    <option value="" >please select</option>
                                                    <option value="1">Ngumi</option>
                                                    <option value="0">Mateke</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">Have you sereved military ?</label>
                                                <select name="served_military" class="form-control">
                                                    <option value="" >please select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <input type="checkbox">
                                        <label for="">I accept Terms and condition</label>
                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12" id='reg_alert'>

                                    </div>

                                </div>
                            </form>
                        </section>
                        <!-- Confirm Details -->
                        {{-- <h3>Confirm Detail</h3>
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
                        </section> --}}
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
    const personal_info = $('#personal_info').serialize();
    const addition_info_one = $('#addition_info_one').serialize();
    const addition_info_two = $('#addition_info_two').serialize();

    const combinedFormData = personal_info + '&' + addition_info_one + '&' + addition_info_two;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'POST',
        url: "{{ route('usa.visa.store') }}",
        data: combinedFormData,
        // contentType: false,
        // cache: false,
        // processData : false,
        success: function (response) {
            console.log(response);
            $('#reg_alert').html('<div class="alert alert-success">' + response.message + '</div>');
            setTimeout(function () {
                window.location = "{{ url('payment/profile/')}}" + response.personal_id;
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