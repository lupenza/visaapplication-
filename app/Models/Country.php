<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =['name','continent_id','description','image','uuid','created_by','cover_image','country_attribute','visa_type_id'];

    public function getStatusFormattedAttribute(){

        if ($this->status) {
            return "<span class='badge badge-pill badge-soft-success font-size-11'>Active</span>";
        } else {
            return "<span class='badge badge-pill badge-soft-danger font-size-11'>InActive</span>";
        }
        
    }

    public function continent(){
        return $this->hasOne(Continent::class,'id','continent_id');
    }

    public function visa_type(){
        return $this->hasOne(VisaType::class,'id','visa_type_id');
    }

    public function getCountrySpecialAttribute(){
        $data =explode(',',$this->country_attribute);
        return $data;
    }
}
