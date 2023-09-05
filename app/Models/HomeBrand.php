<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBrand extends Model
{
    use HasFactory;

    protected $fillable = [

        'brand_name',
        'brand_logo',
        'brand_status',

    ];
}
