<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Mustaque Md. Sami',
            'email' => 'sami.centos@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '01713442070',
            'role' => 'admin',
            'status' => 'active',
        ]);
    }
}
