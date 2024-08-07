<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table ='faqs';

    protected $fillable =['name','description','uuid','created_by'];

    public function getStatusFormattedAttribute(){

        if ($this->status) {
            return "<span class='badge badge-pill badge-soft-success font-size-11'>Active</span>";
        } else {
            return "<span class='badge badge-pill badge-soft-danger font-size-11'>InActive</span>";
        }
        
    }
}
