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
            'description' => '<ul><li>With a three-stage learning program, basic cybersecurity components are learned step-by-step and skills are gradually developed.</li><li>Guided and detailed information and explanations are provided, contributing to the experience and development process of experts.</li></ul>',
            'nama' => 'AKADEMI',
            'deskripsi' => '<ul><li>Dengan program pembelajaran tiga tahap, komponen keamanan siber dasar dipelajari selangkah demi selangkah dan keterampilan dikembangkan secara bertahap.</li><li>Informasi dan penjelasan yang dipandu dan terperinci disediakan, memberikan kontribusi pada pengalaman dan proses pengembangan para ahli.</li></ul>',
            'image' => 'typeGallery6.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 3,
            'name' => 'SCENARIO',
            'description' => '<ul><li>Realistic and immersive scenarios allow theoretical knowledge to be put into practice.</li><li>Various scenarios suitable for different skill levels appeal to cybersecurity experts of all levels.</li><li>Creating an environment to experience real-world security challenges, test competencies, and develop analytical thinking skills.</li></ul>',
            'nama' => 'SKENARIO',
            'deskripsi' => '<ul><li>Skenario yang realistis dan mendalam memungkinkan pengetahuan teoretis untuk dipraktikkan.</li><li>Berbagai skenario yang cocok untuk berbagai tingkat keahlian menarik bagi para ahli keamanan siber dari semua tingkatan.</li><li>Menciptakan lingkungan untuk merasakan tantangan keamanan dunia nyata, menguji kompetensi, dan mengembangkan keterampilan berpikir analitis.</li></ul>',
            'image' => 'typeGallery7.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 3,
            'name' => 'LABORATORY',
            'description' => '<ul><li>To specialize in certain cybersecurity fields, laboratories offer focused modules.</li><li>Knowledge and skills are tested in penetration testing, incident response, network security, and more.</li><li>Challenging and practical exercises reinforce theoretical knowledge and enhance cybersecurity readiness.</li></ul>',
            'nama' => 'LABORATORIUM',
            'deskripsi' => '<ul><li>Untuk mengkhususkan diri dalam bidang keamanan siber tertentu, laboratorium menawarkan modul-modul yang terfokus.</li><li>Pengetahuan dan keterampilan diuji dalam pengujian penetrasi, respons insiden, keamanan jaringan, dan banyak lagi.</li><li>Latihan yang menantang dan praktis memperkuat pengetahuan teoretis dan meningkatkan kesiapan keamanan siber.</li></ul>',
            'image' => 'typeGallery8.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 3,
            'name' => 'CYBER RANGE',
            'description' => '<ul><li>The Cyber Range area, which includes advanced technology, offers opportunities to test capabilities on dynamic platforms resembling real-world systems and networks.</li><li>Realistic scenarios and live exercises allow experts to experience real-world pressure and learn how to protect critical assets.</li><li>In an environment where vulnerabilities and malware specifically prepared for scenarios will be detected, experts cybersecurity knowledge is maximized.</li><li>Red and blue teams are given the opportunity to compete against each other in the same environment and real cyber-attack simulations are created.</li><li>With the Cyber Range area, the teamwork and communication skills of experts are enhanced.</li></ul>',
            'nama' => 'JANGKAUAN SIBER',
            'deskripsi' => '<ul><li>Area Cyber Range, yang mencakup teknologi canggih, menawarkan kesempatan untuk menguji kemampuan pada platform dinamis yang menyerupai sistem dan jaringan dunia nyata.</li><li>Skenario realistis dan latihan langsung memungkinkan para ahli untuk mengalami tekanan dunia nyata dan mempelajari cara melindungi aset penting.</li><li>Dalam lingkungan di mana kerentanan dan malware yang secara khusus dipersiapkan untuk skenario akan terdeteksi, pengetahuan keamanan siber para ahli akan dimaksimalkan.</li><li>Tim merah dan biru diberi kesempatan untuk bersaing satu sama lain di lingkungan yang sama dan simulasi serangan siber yang nyata dibuat.</li><li>Dengan area Cyber Range, kerja sama tim dan keterampilan komunikasi para ahli ditingkatkan.</li></ul>',
            'image' => 'typeGallery9.png',
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
