<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
    use HasFactory;

    protected $fillable = [

        'banner_title',
        'banner_cover',
        'banner_desc',
        'banner_status'

    ];
}
