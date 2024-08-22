<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

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
