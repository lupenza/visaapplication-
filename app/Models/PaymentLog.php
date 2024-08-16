<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentLog extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =[
        'amount',
        'external_id',
        'vendor_id', 
        'uuid', 
        'personal_id', 
        'applicant' ,
        'visa_type' ,
    ];
}
