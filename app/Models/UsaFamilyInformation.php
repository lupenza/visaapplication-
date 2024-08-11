<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsaFamilyInformation extends Model
{
    use HasFactory;

    public $table='usa_family_informations';


    protected $fillable=[
        'father_surname',
        'father_given_name',
       'father_dob',
        'is_father_in_us',
        'mother_surname',
        'mother_name',
        'mother_dob',
        'is_mother_in_us',
        'other_imemediate_relative_in_us',
        'other_relative_in_us',
        'spouse_name',
       'spouse_dob',
        'spouse_nationality',
        'spouse_city',
        'spouse_origin',
        'spouse_address',
        'uuid',
        'personal_information_id'
    ];
}
