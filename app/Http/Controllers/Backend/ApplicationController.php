<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsaFormRequest;
use App\Models\UsaEducationInformation;
use App\Models\UsaFamilyInformation;
use App\Models\UsaHotelDetail;
use App\Models\UsaPersonalInformation;
use App\Models\UsaTripPayer;
use App\Traits\FileImportTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Str;

class ApplicationController extends Controller
{
    use FileImportTrait;
    public function index(){
        return view('backend.applications.list');
    }

    public function create(){
        return view('backend.applications.add');
    }

    public function paymentProfile($id){
        return $id;
    }

    public function usaVisaStore(UsaFormRequest $request){
        $valid =$request->validated();

        try {
           $id= DB::transaction(function() use ($valid,$request){

                $personal =UsaPersonalInformation::create([
                    'applicant_id'      =>Auth::user()->id,
                    'uuid'              =>(string)Str::orderedUuid(),
                    'application_stage' =>0,
                    'maritial_status'      =>$valid['maritial_status'],
                    'passport_held'      =>$valid['passport_held'],
                    'permanent_residence'      =>$valid['permanent_residence'],
                    'home_country'      =>$valid['home_country'],
                    'home_city'      =>$valid['home_city'],
                    'home_street'      =>$valid['home_street'],
                    'primary_email'      =>$valid['primary_email'],
                    'primary_phone_number'      =>$valid['primary_phone_number'],
                    'stolen_passport'      =>$valid['stolen_passport'],
                    'purpose_of_trip'      =>$valid['purpose_of_trip'],
                    'arrival_date'      =>$valid['arrival_date'],
                    'departure_date'      =>$valid['departure_date'],
                    'arrival_city'      =>$valid['arrival_city'],
                    'street'      =>$valid['street'],
                    'postal_code'      =>$valid['postal_code'],
                    'insurance'      =>$valid['insurance'],
                    'insurance_name'      =>$valid['insurance_name'],
                    // 'passport'      =>$valid['passport'],
                    'other_people_travel'      =>$valid['other_people_travel'],
                    'have_been_us'      =>$valid['have_been_us'],
                    'have_you_own_us_visa'      =>$valid['have_you_own_us_visa'],
                    'refused_us_visa'      =>$valid['refused_us_visa'],
                    'clan'      =>$valid['clan'],
                    'languages'      =>json_encode($valid['languages']),
                    'visited_city'      =>json_encode($valid['visited_city']),
                    'specialized_skill'      =>$valid['specialized_skill'],
                    'social_contribution'      =>$valid['social_contribution'],
                    'served_military'      =>$valid['served_military'],
                    'application_stage'    =>0,

                ]);

                if ($valid['payer_name'] || $valid['payer_phone_number']){
                    $payer =UsaTripPayer::create([
                        'payer_name'=>$valid['payer_name'],
                        'payer_phone_number'=>$valid['payer_phone_number'],
                        'payer_email'=>$valid['payer_email'],
                        'payer_relationship'=>$valid['payer_relationship'],
                        'address_equality'=>$valid['address_equality'],
                        'payer_street_address'=>$valid['payer_street_address'],
                        'payer_city'=>$valid['payer_city'],
                        'payer_state'=>$valid['payer_state'],
                        'payer_postal_code'=>$valid['payer_postal_code'],
                        'payer_country'=>$valid['payer_country'],
                        'uuid'              =>(string)Str::orderedUuid(),
                        'personal_information_id' =>$personal->id
                    ]); 
                }
                
                if ($request['us_contact_person'] || $request['us_contact_address']) {
                    $hotel =UsaHotelDetail::create([
                        'us_contact_person'=>$request['us_contact_person'],
                        'us_contact_address'=>$request['us_contact_address'],
                        'us_contact_organization'=>$request['us_contact_organization'],
                        'us_contact_relationship'=>$request['us_contact_relationship'],
                        'us_contact_phone'=>$request['us_contact_phone'],
                        'us_contact_email'=>$request['us_contact_email'],
                        'uuid'              =>(string)Str::orderedUuid(),
                        'personal_information_id' =>$personal->id
                    ]);
                }
                if ($valid['father_surname'] || $valid['mother_surname']) {
                    $familiy =UsaFamilyInformation::create([
                        'father_surname'=>$valid['father_surname'],
                        'father_given_name'=>$valid['father_given_name'],
                       'father_dob'=>$valid['father_dob'],
                        'is_father_in_us'=>$valid['is_father_in_us'],
                        'mother_surname'=>$valid['mother_surname'],
                        'mother_name'=>$valid['mother_name'],
                        'mother_dob'=>$valid['mother_dob'],
                        'is_mother_in_us'=>$valid['is_mother_in_us'],
                        'other_imemediate_relative_in_us'=>$valid['other_imemediate_relative_in_us'],
                        'other_relative_in_us'=>$valid['other_relative_in_us'],
                        'spouse_name'=>$valid['spouse_name'],
                       'spouse_dob'=>$valid['spouse_dob'],
                        'spouse_nationality'=>$valid['spouse_nationality'],
                        'spouse_city'=>$valid['spouse_city'],
                        'spouse_origin'=>$valid['spouse_origin'],
                        'spouse_address'=>$valid['spouse_address'],
                        'uuid'              =>(string)Str::orderedUuid(),
                        'personal_information_id' =>$personal->id
                    ]);
                }
                if($valid['primary_occupation'] || $valid['college_name']){

                $education =UsaEducationInformation::create([
                    'primary_occupation'=>$valid['primary_occupation'],
                    'present_employer'=>$valid['present_employer'],
                    'employer_duties'=>$valid['employer_duties'],
                    'employer_phone_number'=>$valid['employer_phone_number'],
                    'monthly_salary'=>$valid['monthly_salary'],
                     'previously_employed'=>$valid['previously_employed'],
                     'duties'=>$valid['duties'],
                    'college_name'=>$valid['college_name'],
                    'college_address'=>$valid['college_address'],
                    'uuid'              =>(string)Str::orderedUuid(),
                    'personal_information_id' =>$personal->id
                ]);

               }

                if ($request->hasFile('passport')) {
                    $personal->passport =$this->importFile($request->file('passport'),Auth::user()->name.'_'.$personal->uuid);
                    $personal->save();
                }

                return $personal->id;

            });
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'success' =>true,
                'errors'  =>$th->getMessage()
            ],500);
        }

        return response()->json([
            'success' =>true,
            'message' =>'Action Done Successfully',
            'personal_id' =>$id
        ],200);
    }

    
}
