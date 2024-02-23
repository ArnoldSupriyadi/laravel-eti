<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('123'),
            'is_active' => 1,
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'is_active' => 1,
            'created_at' => Carbon::now(),
        ]);
    }
}
