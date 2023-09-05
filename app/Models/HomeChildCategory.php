<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeChildCategory extends Model
{
    use HasFactory;

    protected $fillable = [

        'sub_cat_id',
        'child_cat_name',
        'child_cat_status',

    ];
}
