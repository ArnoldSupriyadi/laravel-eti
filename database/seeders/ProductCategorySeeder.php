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
            'description' => 'Explore our extensive catalog of soldier supplies, meticulously curated to meet the rigorous demands of military life. From durable combat uniforms and footwear engineered for performance to advanced tactical gear designed for optimal functionality, our products are crafted with precision and tested for reliability in the field.',
            'image' => 'category1.jpg',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 1,
            'name' => 'Technology And Information',
            'description' => '',
            'image' => 'category2.jpg',
            // 'image' => 'teknologi-informasi.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 1,
            'name' => 'Modified Vehichels',
            'description' => '',
            'image' => 'category3.jpg',
            // 'image' => 'kendaraan-modifikasi.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 2,
            'name' => 'Internet Of Things',
            'description' => '',
            'image' => 'category4.jpg',
            // 'image' => 'iot.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 2,
            'name' => 'Application And Program',
            'description' => '',
            'image' => 'category5.jpg',
            // 'image' => 'application-program.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 2,
            'name' => 'Fivto STB',
            'description' => '',
            'image' => 'category6.jpg',
            // 'image' => 'fivto-stb.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
