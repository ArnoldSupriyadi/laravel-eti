<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeGallerySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('product_type_galleries')->insert([
            'type_id' => 1,
            'name' => 'Soldier Supplies',
            'description' => 'Explore our extensive catalog of soldier supplies, meticulously curated to meet the rigorous demands of military life. From durable combat uniforms and footwear engineered for performance to advanced tactical gear designed for optimal functionality, our products are crafted with precision and tested for reliability in the field.',
            'nama' => 'Perlengkapan Prajurit',
            'deskripsi' => '',
            'image' => 'category1.png',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
