<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceChildCategory extends Model
{
    use HasFactory;
    protected $fillable = [

        'sub_cat_id',
        'child_cat_name',
        'child_cat_title',
        'child_cat_image',
        'child_cat_status',

    ];
}
