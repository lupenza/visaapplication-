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
                                            <label for="basicpill-firstname-input">  Gender <span class="text-danger">*</span></label>
                                            <select name="gender" class="form-control">
                                                <option value="" >Please Select</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Date of birth</label>
                                            <input type="date" name="dob" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Place of Birth</label>
                                           <input type="text" name="place_of_birth" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Country of birth</label>
                                            <input type="text" name="country_of_birth" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Current Nationality <sub>By Birth or different</sub></label>
                                           <input type="text" name="current_nationality" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">National Identity Number</label>
                                            <input type="text" name="nin" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Type of Travel Document</label>
                                            <select name="travel_document" class="form-control">
                                                <option value="" >Please Select</option>
                                                <option value="Oridinary Passport">Oridinary Passport</option>
                                                <option value="Diplomatic Passport">Diplomatic Passport</option>
                                                <option value="Service Passport">Service Passport</option>
                                                <option value="Official Passport">Official Passport</option>
                                                <option value="Special Passport">Special Passport</option>
                                                <option value="Other Travel Document">Other Travel Document</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Number of travel document</label>
                                            <input type="text" name="no_of_travel_document" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Date of Issue</label>
                                            <input type="date" name="date_issue" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Valid Until</label>
                                            <input type="date" name="validity" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Issued By</label>
                                            <input type="text" name="issued_by" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Home Address</label>
                                            <input type="text" name="home_address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Email</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Phone Number</label>
                                            <input type="number" name="phone_number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Residence in a country other than the country of current nationality</label>
                                            <select name="other_residence" class="form-control">
                                                <option value="" >please select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input"> Residence permit or equivalent No</label>
                                            <input type="text" name="residence_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input"> Valid until</label>
                                            <input type="date" name="residence_valid" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Current occupation</label>
                                            <input type="text" name="current_occupation" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">  Employer and employer's address and telephone number. For students, name and address of educational establishment.</label>
                                            <textarea name="employer_address" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Main purpose(s) of the journey</label>
                                            <select name="purpose_of_journey" class="form-control" id="">
                                                <option value="">Please select</option>
                                                <option value="Tourism">Tourism</option>
                                                <option value="Business">Business</option>
                                                <option value="Visiting family or friends">Visiting family or friends</option>
                                                <option value="Cultural">Cultural</option>
                                                <option value="Sports">Sports</option>
                                                <option value="Official visit">Official visit</option>
                                                <option value="Medical reasons">Medical reasons</option>
                                                <option value="Study">Study</option>
                                                <option value="Transit">Transit</option>
                                                <option value="Airport transit ">Airport transit </option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Member State(s) of destination</label>
                                            <input type="text" name="member_state" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Member State of first entry</label>
                                            <input type="text" name="member_state_entry" class="form-control">
                                        </div>
                                    </div>
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
                                            <label for="basicpill-firstname-input">Number of entries requested ?</label>
                                            <select name="entry_requested" class="form-control">
                                                <option value="" >please select</option>
                                                <option value="Single entry">Single entry</option>
                                                <option value="Two entries">Two entries</option>
                                                <option value="Multiple entries">Multiple entries</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Duration of the intended stay or transit Indicate number of days</label>
                                            <input type="text" name="duration" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Schengen visas issued during the past three years?</label>
                                            <select name="visa_issue_before" class="form-control">
                                                <option value="" >please select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Date(s) of validity from ?</label>
                                           <input type="date" name="date_from" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Date(s) of validity To ?</label>
                                           <input type="date" name="date_to" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Fingerprints collected previously for the purpose of applying for a Schengen visa ? </label>
                                            <select name="fingerprint" class="form-control" >
                                                <option value="">please select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Collection Date</label>
                                            <input type="date" name="collection_date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input"> Entry permit for the final country of destination,<sub>Issued By</sub></label>
                                           <input type="text" name="permit_issuer" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Valid from</label>
                                            <input type="date" name="valid_from" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Valid To</label>
                                            <input type="text" name="valid_to" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Intended date of arrival in the Schengen area </label>
                                           <input type="date" name="arrival_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input"> Intended date of departure from the Schengen area</label>
                                            <input type="date"  name="departure_date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input"> Surname and first name of the inviting person(s) in the Member State(s). If not applicable, name of hotel(s) or temporary
                                                accommodation(s) in the Member State(s)</label>
                                                <textarea name="inviting_person" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input"> Address and e-mail address of inviting person(s)/hotel(s)/temporary
                                                accommodation(s)</label>
                                                <textarea name="inviting_person_address" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input"> Name and address of inviting company/organisation </label>
                                                <textarea name="inviting_company" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Telephone and telefax of company/organisation</label>
                                                <textarea name="inviting_company_address" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input"> Surname, first name, address, telephone, telefax, and e-mail address of contact person in company/organisation</label>
                                                <textarea name="company_personel" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">Cost of travelling and living during the applicant's stay is covered</label>
                                                <select name="cost_of_travel" class="form-control">
                                                    <option value="" >please select</option>
                                                    <option value="Cash">Cash</option>
                                                    <option value="Traveller's cheques">Traveller's cheques</option>
                                                    <option value="Credit card">Credit card</option>
                                                    <option value="Pre-paid accommodation">Pre-paid accommodation</option>
                                                    <option value="Pre-paid transport">Pre-paid transport</option>
                                                    <option value="Accommodation provided">Accommodation provided</option>
                                                    <option value="All expenses covered during the stay">All expenses covered during the stay</option>
                                                    <option value="Pre-paid transport">Pre-paid transport</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h6>Personal data of the family member who is an EU, EEA or CH citizen</h6>
                                    </div>  
                                </div> 
                               
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Surname</label>
                                           <input type="text" name="family_surname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input"> First name(s)</label>
                                           <input type="text" name="family_firstname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input"> Date of birth </label>
                                           <input type="date" name="family_dob" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input"> Nationality</label>
                                           <input type="text" name="family_nationality" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Number of travel document or ID card</label>
                                            <input type="text"  name="family_nin" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Family relationship with an EU, EEA or CH citizen</label>
                                            <select name="family_relationship" class="form-control">
                                                <option value="">please select</option>
                                                <option value="spouse">spouse</option>
                                                <option value="child">child</option>
                                                <option value="grandchild">grandchild</option>
                                                <option value="dependent ascendant">dependent ascendant</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                        <!-- Company Document -->
                        {{-- <h3>2. Additional Information (2)</h3>
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
                        </section> --}}
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
    //const addition_info_two = $('#addition_info_two').serialize();

    const combinedFormData = personal_info + '&' + addition_info_one;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'POST',
        url: "{{ route('schengen.visa.store') }}",
        data: combinedFormData,
        // contentType: false,
        // cache: false,
        // processData : false,
        success: function (response) {
            console.log(response);
            $('#reg_alert').html('<div class="alert alert-success">' + response.message + '</div>');
            setTimeout(function () {
                window.location = "{{ url('payment/profile')}}"+ "/" + response.personal_id;
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