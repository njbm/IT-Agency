<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBlog extends Model
{
    use HasFactory;

    protected $fillable = [

        'blog_cat_id',
        'blog_sub_cat_id',
        'blog_child_cat_id',
        'blog_title',
        'blog_image',
        'blog_desc',
        'blog_writer',
        'blog_status',
        
    ];
}
