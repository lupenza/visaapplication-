<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsaHotelDetail extends Model
{
    use HasFactory;

    public $table='usa_hotel_details';

    protected $fillable =[
        'us_contact_person',
        'us_contact_address',
        'us_contact_organization',
        'us_contact_relationship',
        'us_contact_phone',
        'us_contact_email',
        'uuid',
        'personal_information_id'
    ];
}
