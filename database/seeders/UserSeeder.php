<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => "Md. Nobir Hasan",
                "email" => "nobir.wd@gmail.com",
                'password' => Hash::make(123456789),
                'role' => 1
            ],
            [
                'name' => "Md. Nobir Hasan",
                "email" => "nobir.sau@gmail.com",
                'password' => Hash::make(1111),
                'role' => 2
            ],
        ];
        DB::table('users')->insert($users);
    }
}
