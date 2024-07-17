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
            [
                'name' => 'John Doe',
                'department_id' => 1,
                'designation_id' => 1,
                'email' => 'test@gmail.com',
                'phone_number' => '1234567890',
                'password' => '1234567890',
                'created_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'department_id' => 2,
                'designation_id' => 2,
                'email' => 'test1@gmail.com',
                'password' => '1234567890',
                'phone_number' => '0987654321',
                'created_at' => now(),
            ],
        ]);    }
}
