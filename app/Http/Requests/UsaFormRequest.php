<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsaFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'maritial_status'=>'required',
            'passport_held'=>'required',
            'permanent_residence'=>'required',
            'home_country'=>'required',
            'home_city'=>'required',
            'home_street'=>'required',
            'primary_email'=>'required',
            'primary_phone_number'=>'required',
            'stolen_passport'=>'required',
            'purpose_of_trip'=>'required',
            'arrival_date'=>'required',
            'departure_date'=>'required',
            'arrival_city'=>'required',
            'street'=>'required',
            'postal_code'=>'required',
            'insurance'=>'required',
            'insurance_name'=>'required',
            // 'passport'=>'required',
            'other_people_travel'=>'required',
            'have_been_us'=>'required',
            'have_you_own_us_visa'=>'required',
            'refused_us_visa'=>'required',
            'clan'=>'required',
            'languages'=>'required',
            'visited_city'=>'required',
            'specialized_skill'=>'required',
            'social_contribution'=>'required',
            'served_military'=>'required',

            //block 2

            'payer_name'=>'required',
            'payer_phone_number'=>'required',
            'payer_email'=>'required',
            'payer_relationship'=>'required',
            'address_equality'=>'required',
            'payer_street_address'=>'required',
            'payer_city'=>'required',
            'payer_state'=>'required',
            'payer_postal_code'=>'required',
            'payer_country'=>'required',

            // Block 3
           'us_contact_person'=>'required',
           'us_contact_address'=>'required',
           'us_contact_organization'=>'required',
           'us_contact_relationship'=>'required',
           'us_contact_phone'=>'required',
           'us_contact_email'=>'required',

           // block 4
            'father_surname'=>'required',
            'father_given_name'=>'required',
           'father_dob'=>'required',
            'is_father_in_us'=>'required',
            'mother_surname'=>'required',
            'mother_name'=>'required',
            'mother_dob'=>'required',
            'is_mother_in_us'=>'required',
            'other_imemediate_relative_in_us'=>'required',
            'other_relative_in_us'=>'required',
            'spouse_name'=>'required',
           'spouse_dob'=>'required',
            'spouse_nationality'=>'required',
            'spouse_city'=>'required',
            'spouse_origin'=>'required',
            'spouse_address'=>'required',

            // block 5
           'primary_occupation'=>'required',
           'present_employer'=>'required',
           'employer_duties'=>'required',
           'employer_phone_number'=>'required',
           'monthly_salary'=>'required',
            'previously_employed'=>'required',
            'duties'=>'required',
           'college_name'=>'required',
           'college_address'=>'required',
        ];
    }
}
