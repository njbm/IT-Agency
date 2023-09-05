<?php

namespace Database\Seeders;

use App\Models\Limit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateLimitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [ 'number_of_rows'=>'0',
            'min_amount'=>'0',
            'file_size_allow'=>'0',
            'number_of_product_show'=>'0',]
        ];
        foreach ($data as $key => $data) {
            Limit::create($data);
        }
    }
}
