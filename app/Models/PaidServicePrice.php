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

    public function questions(){
        return $this->hasMany(PaidServiceForm::class,'paid_service_price_id','id');
    }

    public function service(){
        return $this->hasOne(PaidService::class,'id','paid_service_id');
    }

}
