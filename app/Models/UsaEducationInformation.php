<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsaEducationInformation extends Model
{
    use HasFactory;

    public $table='usa_education_informations';


    protected $fillable =[
        'primary_occupation',
        'present_employer',
        'employer_duties',
        'employer_phone_number',
        'monthly_salary',
         'previously_employed',
         'duties',
        'college_name',
        'college_address',
        'uuid',
        'personal_information_id'
    ];
}
