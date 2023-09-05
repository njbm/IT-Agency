<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Editor',
               'email'=>'editor@gmail.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Author',
                'email'=>'author@gmail.com',
                'type'=> 3,
                'password'=> bcrypt('123456'),
            ],
             [
                'name'=>'Contributor',
                'email'=>'contributor@gmail.com',
                'type'=> 4,
                'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
