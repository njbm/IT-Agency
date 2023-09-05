<?php

namespace App\Models;
use App\Models\TeamMember;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMediaLink extends Model
{
    use HasFactory;

    public function teamMember()
    {
        return $this->belongsTo(TeamMember::class);
    }
}
