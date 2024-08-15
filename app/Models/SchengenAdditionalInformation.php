<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchengenAdditionalInformation extends Model
{
    use HasFactory,SoftDeletes;

    public $table ='schengen_additional_informations';
    
    protected $fillable =[
        'schengen_personal_information_id',
        'travel_document',
        'no_of_travel_document',
        'date_issue',
        'validity',
        'issued_by',
        'current_occupation',
        'employer_address',
        'member_state',
        'member_state_entry',
        'entry_requested',
        'duration',
        'visa_issue_before',
        'date_from',
        'date_to',
        'fingerprint',
        'collection_date',
        'permit_issuer',
        'valid_from',
        'valid_to',
        'arrival_date',
        'departure_date',
        'inviting_person',
        'inviting_person_address',
        'inviting_company',
        'inviting_company_address',
        'company_personel',
        'cost_of_travel',
        'family_surname',
        'family_firstname',
        'family_dob',
        'family_nationality',
        'family_nin',
        'family_relationship',
        'uuid'
    ];
}
