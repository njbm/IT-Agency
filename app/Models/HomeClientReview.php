<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeClientReview extends Model
{
    use HasFactory;

    protected $fillable = [

        'client_name',
        'client_image',
        'client_post',
        'client_comment',
        'client_review_status'
    ];
}
