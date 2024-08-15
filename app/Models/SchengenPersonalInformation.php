<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchengenPersonalInformation extends Model
{
    use HasFactory,SoftDeletes;

    public $table ='schengen_personal_informations';

    protected $fillable =[
        'applicant_id',
        'maritial_status',
        'gender',
        'dob',
        'place_of_birth',
        'country_of_birth',
        'current_nationality',
        'nin',
        'home_address',
        'email',
        'phone_number',
        'other_residence',
        'residence_number',
        'residence_valid',
        'purpose_of_journey',
        'residence_valid',
        'application_stage',
        'uuid',
    ];

    public function applicant(){
        return $this->hasOne(User::class,'id','applicant_id');
    }

    public function additional_information(){
        return $this->hasOne(SchengenAdditionalInformation::class,'schengen_personal_information_id','id');
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
