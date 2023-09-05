<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSubCategory extends Model
{
    use HasFactory;

    protected $fillable = [

        'cat_id',
        'sub_cat_name',
        'sub_cat_status',

    ];
}
