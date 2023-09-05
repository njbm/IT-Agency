<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePartner extends Model
{
    use HasFactory;

    protected $fillable = [

        'partner_logo',
        'partner_status',

    ];
}
