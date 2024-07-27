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
            'image' => 'ctgGallery1.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_category_galleries')->insert([
            'category_id' => 3,
            'name' => 'DUAL LASER POINTER & ILLUMINATOR (DLIRIL MR)',
            'description' => '<p>DLIRIL MR combines four unique functions in one body: visible red laser, infrared (IR) laser, infrared (IR) illuminator, and visible tactical flashlight. The tactical flashlight has an extremely strong illumination power of 500 Lumens. DLIRIL MR comes with high or low power modes.</p><ul><li>4 Technologies in One Body Including visible red laser, infrared (IR) laser, infrared (IR) illuminator, and visible tactical flashlight</li><li>Aligned Visible and Infrared Lasers Lasers aligned for the most precise use</li><li>User-Activated Strobe Function Offers a strobe feature to disorient enemies</li><li>Compact and Functional Design Compact body with functional design to meet the demands of the most elite users</li><li>Robust and Reliable Body Design Robust and reliable design to maintain functionality, usability, ergonomics, and performance in harsh conditions</li></ul>',
            'nama' => 'POINTER & ILLUMINATOR LASER GANDA (DLIRIL MR)',
            'deskripsi' => '<p>DLIRIL MR menggabungkan empat fungsi unik dalam satu tubuh: laser merah tampak, laser inframerah (IR), iluminator inframerah (IR), dan senter taktis tampak. Senter taktis memiliki kekuatan penerangan yang sangat kuat sebesar 500 Lumens. DLIRIL MR hadir dengan mode daya tinggi atau rendah.</p><ul><li>4 Teknologi dalam Satu Bodi Termasuk laser merah tampak, laser inframerah (IR), iluminator inframerah (IR), dan senter taktis tampak</li><li>Laser Tampak dan Inframerah yang Disejajarkan Laser yang disejajarkan untuk penggunaan yang paling tepat</li><li>Fungsi Strobo yang Diaktifkan Pengguna Menawarkan fitur strobo untuk membingungkan musuh</li><li>Desain Ringkas dan Fungsional Bodi yang ringkas dengan desain fungsional untuk memenuhi kebutuhan pengguna yang paling elit</li><li>Desain Bodi yang Kuat dan Andal Desain yang kuat dan andal untuk mempertahankan fungsionalitas, kegunaan, ergonomis, dan kinerja dalam kondisi yang keras</li></ul>',
            'image' => 'ctgGallery2.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_category_galleries')->insert([
            'category_id' => 3,
            'name' => 'MONOCULAR LASER RANGEFINDER (MLRF-S)',
            'description' => '<p>MLRF-S is designed to enhance your vision and provide monocular power in a laser rangefinder. It is a robust and modern laser rangefinder integrated with premium glass optics. It has a range of up to 2500+ meters on reflective targets with a Class I eye-safe laser and optimized beam divergence for maximum reliability on small targets.</p><ul><li>High-Quality Optical Components High-quality optics for outstanding performance in low light conditions</li><li>High Light Transmission Excellent image quality with high light transmission across the spectral range</li><li>Lightweight and Compact Design Lightweight and compact design for ease of use</li><li>Accurate and Reliable High-precision laser technology for the most accurate and reliable results</li><li>Eye-Safe Operation Equipped with Class I eye-safe laser according to IEC 60825-1</li></ul>',
            'nama' => 'PENCARI LASER MONOKULAR (MLRF-S)',
            'deskripsi' => '<p>MLRF-S dirancang untuk meningkatkan penglihatan Anda dan memberikan kekuatan monokuler dalam pengintai laser. Ini adalah pengintai laser yang kuat dan modern yang terintegrasi dengan optik kaca premium. Ia memiliki jangkauan hingga 2500+ meter pada target reflektif dengan laser Kelas I yang aman untuk mata dan divergensi sinar yang dioptimalkan untuk keandalan maksimum pada target kecil.</p><ul><li>Komponen Optik Berkualitas Tinggi Optik berkualitas tinggi untuk performa yang luar biasa dalam kondisi cahaya redup</li><li>Transmisi Cahaya Tinggi Kualitas gambar yang sangat baik dengan transmisi cahaya tinggi di seluruh rentang spektral</li><li>Desain Ringan dan Ringkas Desain yang ringan dan ringkas untuk kemudahan penggunaan</li><li>Akurat dan Andal Teknologi laser presisi tinggi untuk hasil yang paling akurat dan andal</li><li>Pengoperasian yang Aman bagi Mata Dilengkapi dengan laser yang aman bagi mata Kelas I menurut IEC 60825-1</li></ul>',
            'image' => 'ctgGallery3.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_category_galleries')->insert([
            'category_id' => 3,
            'name' => 'ELECTRO OPTICAL - TACTICAL FLASHLIGHT AND IR/VIS LASER POINTER (PLF)',
            'description' => '<p>PLF is designed as a low-profile, functional design to meet the demands of the most elite users. Equipped with 500 Lumens white LED technology, visible red laser, and infrared laser. It is one of the most compact devices in its class, combining these three technologies.</p><ul><li>Low-Profile and Functional Design Designed with a low profile and functional design to meet the demands of the most elite users</li><li>3 Technologies in One Body Featuring 500 Lumens white LED technology, visible red laser, and infrared laser</li><li>User-Activated Strobe Function Offers a strobe feature to disorient enemies</li><li>Homogeneous Light Distribution Offers homogeneous light distribution for the best focus</li><li>Robust and Reliable Body Design Robust and reliable design to maintain functionality, usability, ergonomics, and performance in harsh conditions</li></ul>',
            'nama' => 'ELEKTRO OPTIK - SENTER TAKTIS DAN IR/VIS LASER POINTER (PLF)',
            'deskripsi' => '<p>PLF dirancang sebagai desain sederhana dan fungsional untuk memenuhi permintaan sebagian besar pengguna elit. Dilengkapi dengan teknologi LED putih 500 Lumens, laser merah tampak, dan laser inframerah. Ini adalah salah satu perangkat paling ringkas di kelasnya, yang menggabungkan ketiga teknologi tersebut.</p><ul><li>Desain yang Rendah Profil dan Fungsional Dirancang dengan desain yang rendah profil dan fungsional untuk memenuhi permintaan pengguna yang paling elit</li><li>3 Teknologi dalam Satu Badan Menampilkan teknologi LED putih 500 Lumens, laser merah yang terlihat, dan laser inframerah</li><li>Fungsi Strobo yang Diaktifkan Pengguna Menawarkan fitur strobo untuk membingungkan musuh</li><li>Distribusi Cahaya Homogen Menawarkan distribusi cahaya yang homogen untuk fokus terbaik</li><li>Desain Bodi yang Kuat dan Andal Desain yang kuat dan andal untuk mempertahankan fungsionalitas, kegunaan, ergonomis, dan kinerja dalam kondisi yang keras</li></ul>',
            'image' => 'ctgGallery4.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_category_galleries')->insert([
            'category_id' => 6, //Fivto STB
            'name' => 'ANDROID HOSPITALITY CONTENT MANAGEMENT SYSTEM',
            'description' => '<ul><li>FivTo Play is a cloud-based customized system that maximizes your current content for customer experience, making it smart, easy to use, and cost-effective.</li><li>Capable of UPGRADING/CHANGING non-smart TVs to Android TVs with Hospitality Content Management System</li><li>As a Business, FivTo Play is a MANAGED SERVICE that can generate RECURRING REVENUE for Companies.</li><li>Customizable and adjustable according to the needs and demands of the Hospitality Industry</li><li>Helps reduce hotel property capital expenditure through a monthly subscription plan.</li><li>Supports local and international TV channels (89 channels in total) &amp; OTT Media Services (Netflix, Disney+, HBO GO, etc.)</li><li>Back-End Data Integration with local PMS through API.</li><li>Hotel Guest Data Analytics and management through FivTo Play server.</li></ul>',
            'nama' => 'SISTEM MANAJEMEN KONTEN PERHOTELAN ANDROID',
            'deskripsi' => '<ul><li>FivTo Play adalah sistem khusus berbasis cloud yang memaksimalkan konten Anda saat ini untuk pengalaman pelanggan, menjadikannya cerdas, mudah digunakan, dan hemat biaya.</li><li>Mampu MENINGKATKAN/MENGUBAH TV non-smart TV ke TV Android dengan Sistem Manajemen Konten Perhotelan</li><li>Sebagai Bisnis, FivTo Play adalah LAYANAN TERKELOLA yang dapat menghasilkan PENDAPATAN BERULANG untuk Perusahaan.</li><li>Dapat disesuaikan dan disesuaikan dengan kebutuhan dan permintaan Industri Perhotelan</li><li>Membantu mengurangi belanja modal properti hotel melalui paket berlangganan bulanan.</li><li>Mendukung saluran TV lokal dan internasional (total 89 saluran) &amp; Layanan Media OTT (Netflix, Disney+, HBO GO, dll.)</li><li>Integrasi Data Back-End dengan PMS lokal melalui API.</li><li>Analisis dan manajemen data tamu hotel melalui server FivTo Play.</li></ul>',
            'image' => 'ctgGallery5.png',
            'created_at' => Carbon::now(),
        ]);
    }
}
