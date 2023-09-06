<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceSubCategory extends Model
{
    use HasFactory;
    protected $fillable = [

        'cat_id',
        'sub_cat_name',
        'sub_cat_title',
        'sub_cat_image',
        'sub_cat_status',

    ];


    
}
