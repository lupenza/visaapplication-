<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsaTripPayer extends Model
{
    use HasFactory;

    protected $fillable=[
        'payer_name',
        'payer_phone_number',
        'payer_email',
        'payer_relationship',
        'address_equality',
        'payer_street_address',
        'payer_city',
        'payer_state',
        'payer_postal_code',
        'payer_country',
        'uuid',
        'personal_information_id'
    ];
}
