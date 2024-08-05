<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "username" => "Divisi Informasi",
            "name" => "HIMAMO",
            "email" => "divisiinformasi2024@gmail.com",
            "email_verified_at" => "1995-07-17 10:23:34",
            "password" => bcrypt("divisiinformasi2024"),
            "role" => "admin",
        ]);
    }
}
