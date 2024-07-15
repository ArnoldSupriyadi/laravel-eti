<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('product_types')->insert([
            'category_id' => 2,
            'name' => 'UAV Systems',
            'description' => '',
            'nama' => 'Sistem UAV',
            'deskripsi' => '',
            'image' => 'type1.png',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_types')->insert([
            'category_id' => 2,
            'name' => 'Anti-Drone',
            'description' => '',
            'nama' => 'Anti-Drone',
            'deskripsi' => '',
            'image' => 'type2.png',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_types')->insert([
            'category_id' => 2,
            'name' => 'Cyber Security',
            'description' => '',
            'nama' => 'Cyber Security',
            'deskripsi' => '',
            'image' => 'type3.png',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_types')->insert([
            'category_id' => 5,
            'name' => 'Pool',
            'description' => '',
            'nama' => 'Kolam Renang',
            'deskripsi' => '',
            'image' => 'type4.png',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_types')->insert([
            'category_id' => 5,
            'name' => 'Display',
            'description' => '',
            'nama' => 'Tampilan',
            'deskripsi' => '',
            'image' => 'type5.png',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_types')->insert([
            'category_id' => 5,
            'name' => 'Electronic',
            'description' => '',
            'nama' => 'Elektronik',
            'deskripsi' => '',
            'image' => 'type6.png',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_types')->insert([
            'category_id' => 5,
            'name' => 'Kitchen',
            'description' => '',
            'nama' => 'Dapur',
            'deskripsi' => '',
            'image' => 'type7.png',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
