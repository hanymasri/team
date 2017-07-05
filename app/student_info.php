<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_info extends Model
{
    protected $fillable = [
        'personality', 'skill', 'cgpa', 'user_id',
    ];

    
    
}
