<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VisaApplication extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =['applicant_id','visa_type_id','application_stage','uuid','paid_service_plan_id','application_type','country_id'];

    public function applicant(){
        return $this->hasOne(User::class,'id','applicant_id');
    }

    public function service_plan(){
        return $this->hasOne(PaidServicePrice::class,'id','paid_service_plan_id');
    }

    public function visa_type(){
        return $this->hasOne(VisaType::class,'id','visa_type_id');
    }

    public function application_price(){
        return $price = $this->hasOne(VisaType::class,'id','visa_type_id');

        if($price) {
            return $price->price;
        }else{
            return "150,000 TZS";
        }
    }

    public function getStageFormattedAttribute(){
        switch ($this->application_stage) {
            case 1:
                return "<span class='badge badge-pill badge-soft-warning font-size-11'>OnProgress</span>";
                break;
            case 2:
                return "<span class='badge badge-pill badge-soft-success font-size-11'>Accepted</span>";
                break;
            case 3:
                return "<span class='badge badge-pill badge-soft-danger font-size-11'>Rejected</span>";
                break;
            default:
                return "<span class='badge badge-pill badge-soft-primary font-size-11'>Pending</span>";
                break;
        }

    }

    public function getPaymentFormattedAttribute(){
        switch ($this->application_stage) {
            case 1:
                return "<span class='badge badge-pill badge-soft-warning font-size-11'>OnProgress</span>";
                break;
            case 2:
                return "<span class='badge badge-pill badge-soft-success font-size-11'>Accepted</span>";
                break;
            case 3:
                return "<span class='badge badge-pill badge-soft-danger font-size-11'>Rejected</span>";
                break;
            default:
                return "<span class='badge badge-pill badge-soft-primary font-size-11'>Pending</span>";
                break;
        }

    }

    public function getStageFormattedCustomerAttribute(){
        switch ($this->application_stage) {
            case 1:
                return "OnProgress";
                break;
            case 2:
                return "Accepted";
                break;
            case 3:
                return "Rejected";
                break;
            default:
                return "Pending";
                break;
        }

    }

    public function question_answers(){
        return $this->hasMany(QuestionAnswer::class,'visa_application_id');
    }

    public function task_tracks(){
        return $this->hasMany(TaskTrack::class,'resource_id','id');
    }

    public function active_track(){
        return $this->hasOne(TaskTrack::class,'resource_id','id')->where('status',0);
    }

    public function allocated_user(){
        return $this->hasOne(User::class,'id','allocated');
    }

    public function getAppliedServiceAttribute(){

        if ($this->application_type == 1) {
            return $this->visa_type?->name;
        }else{
            return $this->service_plan?->service?->name;
        }
    }

    public function getAppliedServicePlanAttribute(){
            return $this->service_plan?->name;
    }
}
