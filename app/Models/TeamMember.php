<?php

namespace App\Models;
use App\Models\SocialMediaLink;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    public function socialMediaLinks()
    {
        return $this->hasMany(SocialMediaLink::class);
    }
}
