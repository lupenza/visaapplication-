<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsaPersonalInformation extends Model
{
    use HasFactory;

    public $table='usa_personal_informations';

    protected $fillable=[
        'maritial_status',
        'passport_held',
        'permanent_residence',
        'home_country',
        'home_city',
        'home_street',
        'primary_email',
        'primary_phone_number',
        'stolen_passport',
        'purpose_of_trip',
        'arrival_date',
        'departure_date',
        'arrival_city',
        'street',
        'postal_code',
        'insurance',
        'insurance_name',
        'passport',
        'other_people_travel',
        'have_been_us',
        'have_you_own_us_visa',
        'refused_us_visa',
        'clan',
        'languages',
        'visited_city',
        'specialized_skill',
        'social_contribution',
        'served_military',
        'applicant_id',
        'uuid',
        'application_stage'
    ];

    public function applicant(){
        return $this->hasOne(User::class,'id','applicant_id');
    }

    public function getstageFormattedAttribute(){
        switch ($this->application_stage) {
            case 1:
                $stage ="<span class='badge badge-pill badge-soft-warning font-size-11'>OnProgress</span>";
                break;
            case 2:
                $stage ="<span class='badge badge-pill badge-soft-success font-size-11'>Accepted</span>";
                break;
            case 3:
                $stage ="<span class='badge badge-pill badge-soft-danger font-size-11'>Rejected</span>";
                break;
            default:
                $stage ="<span class='badge badge-pill badge-soft-default font-size-11'>Pending</span>";
                break;
        }

        return $stage;
    }
}
