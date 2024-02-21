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
            'name' => 'KKS',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'GTP Development',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Tekno Solusi Digital Solution',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Sun East',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Tisas',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Ata Arms',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => '4D Virtualiz',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Safariland',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Condor',
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Hisense',
            'created_at' => Carbon::now(),
        ]);
    }
}
