<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateFooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
            'site_logo'=>'',
            'footer_title'=>'Footer Title',
            'email_address'=>'demo@gmail.com',
            'footer_color'=>'',
            'footer_description'=>'Description',]
        ];
        foreach ($data as $key => $data) {
            Footer::create($data);
        }
    }
}
