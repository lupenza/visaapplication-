<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionAnswer extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =['question_id','answer','visa_application_id','uuid','application_type'];

    // public function question(){
    //     if ($this->application_type == 1) {
    //     return $this->hasOne(Question::class,'id','question_id');
            
    //     } else {
    //     return $this->hasOne(PaidServiceForm::class,'id','question_id');
            
    //     }
        
    // }

    public function getQuestionAttribute()
    {
        if ($this->application_type == 1) {
            return $this->hasOne(Question::class, 'id', 'question_id')->first();
        } else {
            return $this->hasOne(PaidServiceForm::class, 'id', 'question_id')->first();
        }
    }

}
