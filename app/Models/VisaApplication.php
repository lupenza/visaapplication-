<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VisaApplication extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =['applicant_id','visa_type_id','application_stage','uuid'];
}
