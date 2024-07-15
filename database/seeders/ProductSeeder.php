<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Defense',
            'description' => '',
            'image' => 'product1.png',
            // 'image' => 'defense-cover-img.jpg',
            'created_at' => Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Commercial',
            'description' => '',
            'image' => 'product2.png',
            // 'image' => 'commercial-cover-img.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
