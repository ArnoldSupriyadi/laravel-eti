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
            'name' => 'ATTACK DRONE',
            'description' => '',
            'nama' => 'DRONE SERANGAN',
            'deskripsi' => '',
            'image' => 'typeGallery1.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 1,
            'name' => 'MORTAR DRONE',
            'description' => '',
            'nama' => 'DRONE MORTIR',
            'deskripsi' => '',
            'image' => 'typeGallery2.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 1,
            'name' => 'SURVEILLANCE DRONE',
            'description' => '',
            'nama' => 'DRONE PENGINTAI',
            'deskripsi' => '',
            'image' => 'typeGallery3.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 2,
            'name' => 'MANPACK METER',
            'description' => 'MERTER Man-Pack Portable Electronic Attack System disrupts target communication from a distance using modern techniques in the VHF band. MERTER provides versatile protection, from patrols to wider ranges. The system facilitates cooperative electronic warfare and simultaneous RF detection and jamming techniques. Control via PC or tablet allows monitoring and adjustment, with power options from rechargeable batteries or AC input. MERTER, the modern human-pack electronic attack system, is designed to withstand tactical field conditions. The system is equipped with infrastructure to meet the comprehensive needs for next-generation cognitive electronic warfare. Using a wideband RF receiver, the system detects multiple targets with diverse features and applies reactive electronic attack techniques in dynamic scenarios.',
            'nama' => 'METER MANPACK',
            'deskripsi' => 'Sistem Serangan Elektronik Portabel MERTER Man-Pack mengganggu komunikasi target dari jarak jauh menggunakan teknik modern dalam pita VHF. MERTER memberikan perlindungan serbaguna, mulai dari patroli hingga jangkauan yang lebih luas. Sistem ini memfasilitasi peperangan elektronik kooperatif serta teknik deteksi dan jamming RF secara simultan. Kontrol melalui PC atau tablet memungkinkan pemantauan dan penyesuaian, dengan opsi daya dari baterai yang dapat diisi ulang atau input AC. MERTER, sistem serangan elektronik paket manusia modern, dirancang untuk tahan terhadap kondisi lapangan taktis. Sistem ini dilengkapi dengan infrastruktur untuk memenuhi kebutuhan komprehensif peperangan elektronik kognitif generasi mendatang. Dengan menggunakan penerima RF pita lebar, sistem mendeteksi banyak target dengan beragam fitur dan menerapkan teknik serangan elektronik reaktif dalam skenario dinamis.',
            'image' => 'typeGallery4.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 2,
            'name' => 'STATIC – ILTER J350',
            'description' => 'ILTER J350, designed by Bogazici, comes as an advanced solution in the field of Drone Detection and Neutralization Systems, meticulously crafted to protect critical infrastructure and uphold security in various environments. With a diverse array of system components and advanced technical features, ILTER J350 is unmatched in its capacity to detect and swiftly counter unauthorized drone activity.',
            'nama' => 'STATIC – ILTER J350',
            'deskripsi' => 'ILTER J350, dirancang oleh Bogazici, hadir sebagai solusi canggih di bidang Sistem Deteksi dan Netralisasi Drone, dibuat dengan cermat untuk melindungi infrastruktur penting dan menjunjung keamanan di berbagai lingkungan. Dengan beragam komponen sistem dan fitur teknis canggih, ILTER J350 tidak tertandingi dalam kapasitasnya untuk mendeteksi dan dengan cepat melawan aktivitas drone yang tidak sah.',
            'image' => 'typeGallery5.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 3,
            'name' => 'ACADEMY',
            'description' => '',
            'nama' => '',
            'deskripsi' => '',
            'image' => 'typeGallery.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 3,
            'name' => 'SCENARIO',
            'description' => '',
            'nama' => '',
            'deskripsi' => '',
            'image' => 'typeGallery.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 3,
            'name' => 'LABORATORY',
            'description' => '',
            'nama' => '',
            'deskripsi' => '',
            'image' => 'typeGallery.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 3,
            'name' => 'CYBER RANGE',
            'description' => '',
            'nama' => '',
            'deskripsi' => '',
            'image' => 'typeGallery.png',
            'created_at' => Carbon::now(),
        ]);

        // DB::table('product_type_galleries')->insert([
        //     'type_id' => 3,
        //     'name' => '',
        //     'description' => '',
        //     'nama' => '',
        //     'deskripsi' => '',
        //     'image' => 'typeGallery.png',
        //     'created_at' => Carbon::now(),
        // ]);
    }
}
