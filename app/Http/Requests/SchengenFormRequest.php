<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchengenFormRequest extends FormRequest
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
            // block 1
            'maritial_status'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'place_of_birth'=>'required',
            'country_of_birth'=>'required',
            'current_nationality'=>'required',
            'nin'=>'required',
            'home_address'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'other_residence'=>'required',
            'residence_number'=>'required',
            'residence_valid'=>'required',
            'purpose_of_journey'=>'required',
            'residence_valid'=>'required',

            // block 2
            'travel_document'=>'required',
            'no_of_travel_document'=>'required',
            'date_issue'=>'required',
            'validity'=>'required',
            'issued_by'=>'required',
            'current_occupation'=>'required',
            'employer_address'=>'required',
            'member_state'=>'required',
            'member_state_entry'=>'required',
            'entry_requested'=>'required',
            'duration'=>'required',
            'visa_issue_before'=>'required',
            'date_from'=>'required',
            'date_to'=>'required',
            'fingerprint'=>'required',
            'collection_date'=>'required',
            'permit_issuer'=>'required',
            'valid_from'=>'required',
            'valid_to'=>'required',
            'arrival_date'=>'required',
            'departure_date'=>'required',
            'inviting_person'=>'required',
            'inviting_person_address'=>'required',
            'inviting_company'=>'required',
            'inviting_company_address'=>'required',
            'company_personel'=>'required',
            'cost_of_travel'=>'required',
            'family_surname'=>'required',
            'family_firstname'=>'required',
            'family_dob'=>'required',
            'family_nationality'=>'required',
            'family_nin'=>'required',
            'family_relationship'=>'required',

        ];
    }
}
