<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaidServiceForm extends Model
{
    use HasFactory,SoftDeletes;

    public $table ='paid_service_form';

    protected $fillable =[
        'name',
        'rule' ,
        'input_type',
        'arrangement',
        'options',
        'uuid' ,
        'created_by',
        'paid_service_id',
        'paid_service_price_id'
    ];
}
