<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LangingPage;

class LangingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
            'slider_top_title'=>'Creative & Minimal',
            'slider_sort_title'=>'IT Agency',
            'slider_description'=>'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularise',

            's1_title1'=>'What We Do',
            's1_text1'=>'Our Service',

            's2_title1'=>'Clients',
            's2_text1'=>'Meet Our Belivers',
            's2_back_img'=>'',

            's3_title1'=>'Our Project',
            's3_text1'=>'Find The Category For You',
            's3_text2'=>'Video Libraries',
            's3_description1'=>'Lorem Ipsum has been the industrys standard dummy text em Ipsum has been the industrys standard dummy texLorem Ipsum has been the industrys standard dummy text em Ipsum has been the industrys standard dummy tex',

            's4_title1'=>'our partner',
            's4_text1'=>'Meet our partner',
            's4_back_img1'=>'',

            's5_title1'=>'Our Team',
            's5_title2'=>'Meet The Team',
            's5_title_r'=>'Compant At a Glance',

            's6_title1'=>'Specilalized',
            's6_text1'=>'Technologies',
            's6_back_img1'=>'',

            's7_title1'=>'Specialized',
            's7_text1'=>'Specialized Staff We Provide',

            's8_title1'=>'Tetimonials',
            's8_text1'=>'Our Client Say',

            's9_title1'=>'Looking For The Best It Business Solution',
            's9_back_img1'=>'',

            's10_title1'=>'Get Consultation',
            's10_text1'=>'Contact Us',
            's10_r_title1'=>'Go further with the MHM',
            's10_r_sceen'=>'',
            's10_r_text1'=>'Save even more - Get up to 25% on select Projects and earn double the points when you get on the app.',
            's10_r_text2'=>'Scan the QR code with your device camera and download our app',

            ]
        ];
        foreach ($data as $key => $data) {
            LangingPage::create($data);
        }
    }
}
