<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaidServicePrice extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =['name','offers','price','uuid','created_by','paid_service_id'];

    public function getPriceOfferAttribute(){
        return explode(",",$this->offers);
    }

}
