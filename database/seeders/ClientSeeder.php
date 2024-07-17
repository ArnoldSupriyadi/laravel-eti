<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('clients')->insert([
            'name' => 'Tekno Solusi Digital Solution',
            'logo' => 'client1.png',
            'status' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Sun East',
            'logo' => 'client2.png',
            'status' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'GTP Development',
            'logo' => 'client3.png',
            'status' => 0,
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Bogazici',
            'logo' => 'client4.png',
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Condor',
            'logo' => 'client5.png',
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Hisense',
            'logo' => 'client6.png',
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Safariland',
            'logo' => 'client7.png',
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'STM',
            'logo' => 'client8.png',
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Drone Volt',
            'logo' => 'client9.png',
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);
    }
}
