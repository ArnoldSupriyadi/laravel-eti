<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            'name' => 'Super Admin',
            'created_at' => Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'name' => 'Admin',
            'created_at' => Carbon::now(),
        ]);
    }
}
