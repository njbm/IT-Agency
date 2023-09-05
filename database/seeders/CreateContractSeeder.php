<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['email1' => 'admin@gmail.com',
            'email2' => 'admin@gmail.com',
            'address1' => 'dhaka,bangladesh',
            'address2' => 'dhaka,bangladesh',
            'contract1'=>'017------',
            'contract2'=>'017------',
            ]
        ];
        foreach ($data as $key => $data) {
            Contract::create($data);
        }
    }
}