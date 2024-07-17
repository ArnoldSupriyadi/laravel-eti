<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoryGallerySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('product_category_galleries')->insert([
            'category_id' => 1,
            'name' => 'SOLDIER SUPPLIES - UNIFORMS & BATTLEFIELD PROTECTION',
            'description' => 'ETI is a national asset that will contribute to the needs of the forces with its capability to complete military operations. As much as possible, in line with military strategy expectations and user needs. Your mission is our mission, your protection choice is our responsibility. By producing comfortable tactical gear while prioritizing military defense standards specifically.',
            'nama' => 'PERSEDIAAN TENTARA - SERAGAM & PERLINDUNGAN MEDAN PERANG',
            'deskripsi' => 'ETI merupakan aset nasional yang akan memberikan kontribusi terhadap kebutuhan kekuatan dengan kemampuannya dalam menyelesaikan operasi militer. Sebisa mungkin sejalan dengan ekspektasi strategi militer dan kebutuhan pengguna. Misi Anda adalah misi kami, pilihan perlindungan Anda adalah tanggung jawab kami. Dengan memproduksi perlengkapan taktis yang nyaman dengan tetap mengedepankan standar pertahanan militer secara khusus.',
            'image' => 'categoryGallery1.png',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_category_galleries')->insert([
            'category_id' => 3,
            'name' => 'DUAL LASER POINTER & ILLUMINATOR (DLIRIL MR)',
            'description' => 'DLIRIL MR combines four unique functions in one body: visible red laser, infrared (IR) laser, infrared (IR) illuminator, and visible tactical flashlight. The tactical flashlight has an extremely strong illumination power of 500 Lumens. DLIRIL MR comes with high or low power modes.',
            'nama' => 'POINTER & ILLUMINATOR LASER GANDA (DLIRIL MR)',
            'deskripsi' => 'DLIRIL MR menggabungkan empat fungsi unik dalam satu tubuh: laser merah tampak, laser inframerah (IR), iluminator inframerah (IR), dan senter taktis tampak. Senter taktis memiliki kekuatan penerangan yang sangat kuat sebesar 500 Lumens. DLIRIL MR hadir dengan mode daya tinggi atau rendah.',
            'image' => 'categoryGallery2.png',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_category_galleries')->insert([
            'category_id' => 3,
            'name' => 'MONOCULAR LASER RANGEFINDER (MLRF-S)',
            'description' => 'MLRF-S is designed to enhance your vision and provide monocular power in a laser rangefinder. It is a robust and modern laser rangefinder integrated with premium glass optics. It has a range of up to 2500+ meters on reflective targets with a Class I eye-safe laser and optimized beam divergence for maximum reliability on small targets.',
            'nama' => 'PENCARI LASER MONOKULAR (MLRF-S)',
            'deskripsi' => 'MLRF-S dirancang untuk meningkatkan penglihatan Anda dan memberikan kekuatan monokuler dalam pengintai laser. Ini adalah pengintai laser yang kuat dan modern yang terintegrasi dengan optik kaca premium. Ia memiliki jangkauan hingga 2500+ meter pada target reflektif dengan laser Kelas I yang aman untuk mata dan divergensi sinar yang dioptimalkan untuk keandalan maksimum pada target kecil.',
            'image' => 'categoryGallery3.png',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_category_galleries')->insert([
            'category_id' => 3,
            'name' => 'ELECTRO OPTICAL - TACTICAL FLASHLIGHT AND IR/VIS LASER POINTER (PLF)',
            'description' => 'PLF is designed as a low-profile, functional design to meet the demands of the most elite users. Equipped with 500 Lumens white LED technology, visible red laser, and infrared laser. It is one of the most compact devices in its class, combining these three technologies.',
            'nama' => 'ELEKTRO OPTIK - SENTER TAKTIS DAN IR/VIS LASER POINTER (PLF)',
            'deskripsi' => 'PLF dirancang sebagai desain sederhana dan fungsional untuk memenuhi permintaan sebagian besar pengguna elit. Dilengkapi dengan teknologi LED putih 500 Lumens, laser merah tampak, dan laser inframerah. Ini adalah salah satu perangkat paling ringkas di kelasnya, yang menggabungkan ketiga teknologi tersebut.',
            'image' => 'categoryGallery4.png',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_category_galleries')->insert([
            'category_id' => 6, //Fivto STB
            'name' => 'ANDROID HOSPITALITY CONTENT MANAGEMENT SYSTEM',
            'description' => '',
            'nama' => 'SISTEM MANAJEMEN KONTEN PERHOTELAN ANDROID',
            'deskripsi' => '',
            'image' => 'categoryGallery4.png',
            // 'image' => 'perbekalan-prajurit.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
