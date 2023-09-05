<?php

namespace Database\Seeders;

use App\Models\General;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateGeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Enter Name',
            'welcome_text' => 'welcome_text',
            'email' => 'demo@gmail.com',
            'address' => 'dhaka,bangladesh',
            'country'=>'Bangladesh',
            ]
        ];
        foreach ($data as $key => $data) {
            General::create($data);
        }
    }
}
