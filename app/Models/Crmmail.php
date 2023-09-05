<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crmmail extends Model
{
    use HasFactory;

    protected $fillable=['mail_subject ', 'mail_description'];
}
