<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$zGa176xHPhE3oxSnH9zujuo.N2Zx3723mPlflfMZpKBmK68PUPqDO',
            'remember_token' => null,
            'created_at'     => '2019-03-26 08:54:57',
            'updated_at'     => '2019-03-26 08:54:57',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
