<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [

        'subs_title',
        'subs_desc',
        'current_price',
        'old_price',
        'subs_type',
        'blog_status',
        
    ];
}
