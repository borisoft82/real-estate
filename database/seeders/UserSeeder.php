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
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@testbpz.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'status' => '1'
            ],

            [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent@testbpz.com',
                'password' => Hash::make('password'),
                'role' => 'agent',
                'status' => '1'
            ],

            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@testbpz.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'status' => '1'
            ]
        ]);
    }
}
