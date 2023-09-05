<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    use HasFactory;
    
    protected $fillable=
    [
        'student_name',
        'student_image',
        'email',
        'phone_number',
        'date_of_birth',
        'gander',
        'country',
        'city',
        'post_code',
        'nid_number',
        'qualification',
        'address',
        'course_name',
        'course_quantity',
        'course_price',

    ];
}