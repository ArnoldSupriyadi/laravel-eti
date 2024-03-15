<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('product_categories')->insert([
            'product_id' => 1,
            'name' => 'Soldier Supplies',
            'description' => '',
            'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 1,
            'name' => 'Technology And Information',
            'description' => '',
            'image' => 'teknologi-informasi.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 1,
            'name' => 'Modified Vehichels',
            'description' => '',
            'image' => 'kendaraan-modifikasi.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 2,
            'name' => 'Internet Of Things',
            'description' => '',
            'image' => 'iot.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 2,
            'name' => 'Application And Program',
            'description' => '',
            'image' => 'application-program.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 2,
            'name' => 'Fivto STB',
            'description' => '',
            'image' => 'fivto-stb.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
