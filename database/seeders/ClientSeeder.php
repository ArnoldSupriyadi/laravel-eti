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
            'name' => 'GTP Development',
            'logo' => 'client1.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Tekno Solusi Digital Solution',
            'logo' => 'client2.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Sun East',
            'logo' => 'client3.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Tisas',
            'logo' => 'client4.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Ata Arms',
            'logo' => 'client5.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => '4D Virtualiz',
            'logo' => 'client6.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Safariland',
            'logo' => 'client7.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Condor',
            'logo' => 'client8.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Hisense',
            'logo' => 'client9.png',
            'created_at' => Carbon::now(),
        ]);
    }
}
