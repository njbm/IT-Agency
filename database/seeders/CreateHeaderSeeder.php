<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
            'fav_icon'=>'',
            'site_logo'=>'',
            'header_title'=>'Footer Title',
            'header_color'=>'',
            'header_description'=>'Description',
            ]
        ];
        foreach ($data as $key => $data) {
            Header::create($data);
        }
    }
}
