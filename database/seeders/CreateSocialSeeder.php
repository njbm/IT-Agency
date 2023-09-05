<?php

namespace Database\Seeders;

use App\Models\Social_Media;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [ 'social_icon'=>'Enter Your Icon',
            'social_link'=>'Enter Your Icon',]
        ];
        foreach ($data as $key => $data) {
            Social_Media::create($data);
        }
    }
}
