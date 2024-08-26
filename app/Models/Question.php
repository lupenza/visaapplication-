<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory,SoftDeletes;

protected $fillable = [
    'name',
    'visa_type_id',
    'rule',
    'input_type',
    'options',
    'arrangement',
    'created_by',
    'uuid',
    'section'
];
  
}
