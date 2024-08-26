<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaidService extends Model
{
    use HasFactory;

    protected $fillable =['name','description','uuid','created_by'];

    public function price_plans(){
        return $this->hasMany(PaidServicePrice::class,'paid_service_id','id');
    }
}
