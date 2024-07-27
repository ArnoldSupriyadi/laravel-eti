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
            'nama' => 'Perlengkapan Prajurit',
            'deskripsi' => 'Jelajahi katalog lengkap perlengkapan prajurit kami, yang dikuratori dengan cermat untuk memenuhi tuntutan kehidupan militer yang ketat. Dari seragam tempur tahan lama dan alas kaki yang dirancang untuk kinerja hingga perlengkapan taktis canggih yang dirancang untuk fungsionalitas optimal, produk kami dibuat dengan presisi dan diuji keandalannya di lapangan.',
            'image' => 'category1.png',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 1,
            'name' => 'Warfare Technology',
            'description' => '',
            'nama' => 'Teknologi Peperangan',
            'deskripsi' => '',
            'image' => 'category2.jpg',
            // 'image' => 'teknologi-informasi.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 1,
            'name' => 'Electro Optical',
            'description' => '',
            'nama' => 'Elektro Optik',
            'deskripsi' => '',
            'image' => 'category3.png',
            // 'image' => 'kendaraan-modifikasi.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 1,
            'name' => 'Digital Combat Systems',
            'description' => '',
            'nama' => 'Sistem Tempur Digital',
            'deskripsi' => '',
            'image' => 'category4.png',
            // 'image' => 'kendaraan-modifikasi.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 2,
            'name' => 'Hospitality Service',
            'description' => '',
            'nama' => 'Layanan Perhotelan',
            'deskripsi' => '',
            'image' => 'category5.png',
            // 'image' => 'application-program.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_categories')->insert([
            'product_id' => 2,
            'name' => 'Fivto STB',
            'description' => '',
            'nama' => 'Fivto STB',
            'deskripsi' => '',
            'image' => 'category6.png',
            // 'image' => 'fivto-stb.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
