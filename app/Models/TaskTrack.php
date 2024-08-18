<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskTrack extends Model
{
    use HasFactory;

    protected $fillable =['user_id','resource_id','resource_type','status','comment','received_date','forward_date','uuid','action'];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
