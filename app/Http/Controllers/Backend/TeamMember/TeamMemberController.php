<?php

namespace App\Http\Controllers\Backend\TeamMember;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\SocialMediaLink;

class TeamMemberController extends Controller
{
    public function all_team_member(){
        $teamMember = TeamMember::all();
        $socialMediaPlatforms= SocialMediaLink::all();
        return view('Backend.pages.Home.TeamMember.all_team_member',compact('teamMember','socialMediaPlatforms'));
    }


public function add_team_member(Request $request)
{
    $socialMediaPlatforms = ['facebook', 'twitter', 'linkedin'];
    // Validation rules
    $rules = [
        'name' => 'required|string|max:255',
        'image' => 'nullable|string|max:255',
        'title' => 'nullable|string|max:100',
    ];

    // Add validation rules for each social media link
    $socialMediaPlatforms = ['facebook', 'twitter', 'linkedin'];
    foreach ($socialMediaPlatforms as $platform) {
        $rules[$platform . '_link'] = 'nullable|url|max:255';
    }

    $request->validate($rules);

    // Create a new team member
    $teamMember = TeamMember::create([
        'name' => $request->input('name'),
        'image' => $request->input('image'),
        'title' => $request->input('title'),
    ]);

    // Create social media links for the team member
    foreach ($socialMediaPlatforms as $platform) {
        $profileLink = $request->input($platform . '_link');
        if ($profileLink) {
            SocialMediaLink::create([
                'team_member_id' => $teamMember->id,
                'platform_name' => $platform,
                'profile_link' => $profileLink,
            ]);
        }
    }
    return view('Backend.pages.Home.TeamMember.all_team_member');
    // return redirect()->route('create.team.member')->with('success', 'Team member added successfully.');
}
}
