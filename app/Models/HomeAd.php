<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAd extends Model
{
    use HasFactory;

    protected $fillable = [

        'ad_name',
        'ad_cover',
        'ad_status'

    ];
}
