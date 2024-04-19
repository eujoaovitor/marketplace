<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                 'name' => 'João Vitor',
                 'username' => 'João',
                 'email'=> 'jvds404@gmail.com',
                 'role' => 'admin',
                 'status' => 'active',
                 'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Vendedor',
                'username' => 'Vendedor',
                'email'=> 'vendedor@gmail.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Cliente',
                'username' => 'Cliente',
                'email'=> 'clienter@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('12345678')
            ]
        ]);
    }
}
