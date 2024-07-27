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
            'description' => '<p>Combat Proven Rotary Wing Loitering Munition System</p><p>KARGU is a portable rotary wing loitering munition system designed to provide tactical ISR and precision strike capabilities for ground forces. KARGU can perform missions planned on the ground with STM control station software. This platform is capable of performing precision strikes with low signature for beyond line of sight targets.</p><ul><li>Combat Proven</li><li>Vertical Takeoff and Landing</li><li>Fast preparation time, less than 1 minute.</li><li>Day &amp; Night Mission Capability</li><li>Beyond Line of sight Precision Strike with minimum collateral damage</li><li>Low RCS (Radar Cross Section) Platform Design</li><li>Mulitple Warhead Options</li><li>High perfomance navigation and flight control system</li><li>Operable by single personnel</li><li>Mission abort and return home capabilities</li><li>Promitixy fuse</li><li>Automatic target recognition system</li></ul>',
            'nama' => 'DRONE SERANGAN',
            'deskripsi' => '<p>Sistem Munisi Rotary Wing Loitering yang Telah Terbukti dalam Pertempuran</p><p>KARGU adalah sistem amunisi rotary wing loitering portabel yang dirancang untuk memberikan ISR taktis dan kemampuan serangan presisi untuk pasukan darat. KARGU dapat melakukan misi yang direncanakan di darat dengan perangkat lunak stasiun kendali STM. Platform ini mampu melakukan serangan presisi dengan tanda tangan rendah untuk target di luar garis pandang.</p><ul><li>Terbukti dalam Pertempuran</li><li>Lepas Landas dan Pendaratan Vertikal</li><li>Waktu persiapan yang cepat, kurang dari 1 menit.</li><li>Kemampuan Misi Siang &amp; Malam</li><li>Serangan presisi di luar garis pandang dengan kerusakan jaminan minimum</li><li>Desain Platform RCS (Penampang Radar) Rendah</li><li>Opsi Hulu Ledak Mulitple</li><li>Sistem navigasi dan kontrol penerbangan berkinerja tinggi</li><li>Dapat dioperasikan oleh satu personel</li><li>Kemampuan membatalkan misi dan kembali ke rumah</li><li>Sekering promitixy</li><li>Sistem pengenalan target otomatis</li></ul>',
            'image' => 'typeGallery1.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 1,
            'name' => 'MORTAR DRONE',
            'description' => '<p>Multi-Rotor Combat UAS with Mortar Payload</p><p>Boyga is designed to be used in tactical areas to drop 81mm mortars onto targets from the air. Boyga carries 81mm mortars and drops them onto targets selected by the user. It has a ballistic estimation algorithm that helps the user see where the mortar will hit the ground. The user can drop the mortar manually after seeing the target point indicator.</p><ul><li>Vertical take-off and landing</li><li>Quick preparation time, less than 1 minute</li><li>Beyond line of sight attack</li><li>Beyond line of sight attack</li><li>Low Radar Cross Section (RCS) platform design</li><li>Optical target tracking</li><li>High-performance flight control and navigation system</li><li>Operable by a single personnel</li><li>Mission abort and return-to-base capability</li><li>Ballistic position estimation algorithm and coordinated attack</li></ul>',
            'nama' => 'DRONE MORTIR',
            'deskripsi' => '<p>UAS Tempur Multi-Rotor dengan Muatan Mortir</p><p>Boyga dirancang untuk digunakan di area taktis untuk menjatuhkan mortir 81mm ke target dari udara. Boyga membawa mortir 81mm dan menjatuhkannya ke target yang dipilih oleh pengguna. Ia memiliki algoritma estimasi balistik yang membantu pengguna melihat di mana mortir akan menghantam tanah. Pengguna dapat menjatuhkan mortir secara manual setelah melihat indikator titik target.</p><ul><li>Lepas landas dan pendaratan vertikal</li><li>Waktu persiapan yang cepat, kurang dari 1 menit</li><li>Serangan di luar garis pandang</li><li>Serangan di luar garis pandang</li><li>Desain platform Penampang Radar Rendah (RCS)</li><li>Pelacakan target optik</li><li>Sistem kontrol penerbangan dan navigasi berkinerja tinggi</li><li>Dapat dioperasikan oleh satu personel</li><li>Kemampuan membatalkan misi dan kembali ke pangkalan</li><li>Algoritme estimasi posisi balistik dan serangan terkoordinasi</li></ul>',
            'image' => 'typeGallery2.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 1,
            'name' => 'SURVEILLANCE DRONE',
            'description' => '<p>Multi-Rotor UAS for Tactical Surveillance and Reconnaissance</p><p>TOGAN is a multi-rotor UAS designed to carry on tactical surveillance and reconnaissance missions. TOGAN incorporates a payload using a 30x zoom lens, enabling imaging of distant targets and threats. TOGAN employs advanced image processing capabilities, enabling the detection and classification of threats that are difficult to spot with human eye. TOGAN is capable of tracking and following fast moving objects.</p><ul><li>Vertical takeoff and landing</li><li>Fast prepation time (less than 1 minute)</li><li>Day &amp; night mission capability</li><li>Low RCS (Radar Cross Section) platform design</li><li>High perfomance navigation and flight control system</li><li>Operable by single personnel</li><li>Mission planning and autonomous mission execution</li><li>Mission abort and return home capabilities</li><li>30x optical zoom capability</li><li>Advanced image processing capabilities</li><li>Ability to follow moving targets</li><li>Target coordinate estimation</li><li>Interopability with KARGU, aiding recognition of threats &amp; targets and enhanching tactical situational awarness</li><li>Automatic mission take-over capability, enabling uninterrupted surveillance</li><li>Ability to take off from land</li></ul>',
            'nama' => 'DRONE PENGINTAI',
            'deskripsi' => '<p>UAS Multi-Rotor untuk Pengawasan dan Pengintaian Taktis</p><p>TOGAN adalah UAS multi-rotor yang dirancang untuk menjalankan misi pengawasan dan pengintaian taktis. TOGAN menggabungkan muatan menggunakan lensa zoom 30x, memungkinkan pencitraan target dan ancaman yang jauh. TOGAN menggunakan kemampuan pemrosesan gambar yang canggih, memungkinkan deteksi dan klasifikasi ancaman yang sulit dikenali dengan mata manusia. TOGAN mampu melacak dan mengikuti objek yang bergerak cepat.</p><ul><li>Lepas landas dan mendarat secara vertikal</li><li>Waktu persiapan yang cepat (kurang dari 1 menit)</li><li>Kemampuan misi siang &amp; malam</li><li>Desain platform RCS (Radar Cross Section) yang rendah</li><li>Sistem navigasi dan kontrol penerbangan berkinerja tinggi</li><li>Dapat dioperasikan oleh satu personel</li><li>Perencanaan misi dan pelaksanaan misi otonom</li><li>Kemampuan menggagalkan misi dan kembali ke rumah</li><li>Kemampuan zoom optik 30x</li><li>Kemampuan pemrosesan gambar tingkat lanjut</li><li>Kemampuan untuk mengikuti target yang bergerak</li><li>Estimasi koordinat target</li><li>Interopabilitas dengan KARGU, membantu mengenali ancaman &amp; target dan meningkatkan kesadaran situasional taktis</li><li>Kemampuan pengambilalihan misi secara otomatis, memungkinkan pengawasan tanpa gangguan</li><li>Kemampuan untuk lepas landas dari darat</li></ul>',
            'image' => 'typeGallery3.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 2,
            'name' => 'MANPACK METER',
            'description' => '<p>MERTER Man-Pack Portable Electronic Attack System disrupts target communication from a distance using modern techniques in the VHF band. MERTER provides versatile protection, from patrols to wider ranges. The system facilitates cooperative electronic warfare and simultaneous RF detection and jamming techniques. Control via PC or tablet allows monitoring and adjustment, with power options from rechargeable batteries or AC input. MERTER, the modern human-pack electronic attack system, is designed to withstand tactical field conditions. The system is equipped with infrastructure to meet the comprehensive needs for next-generation cognitive electronic warfare. Using a wideband RF receiver, the system detects multiple targets with diverse features and applies reactive electronic attack techniques in dynamic scenarios.</p><ul><li>Continuous Look &amp; Jamming Techniques</li><li>Signal Detection, Jamming &amp; Spoofing Capability</li><li>Simultaneous Application of Different Jamming Techniques</li><li>Intelligent Target-Specific Electronic Attack</li><li>Options for Omnidirectional &amp; Directional Antenna Use</li><li>Simultaneous Reactive Jamming Capability with Multiple Synchronized EA Systems</li></ul>',
            'nama' => 'METER MANPACK',
            'deskripsi' => '<p>Sistem Serangan Elektronik Portabel MERTER Man-Pack mengganggu komunikasi target dari jarak jauh menggunakan teknik modern dalam pita VHF. MERTER memberikan perlindungan serbaguna, mulai dari patroli hingga jangkauan yang lebih luas. Sistem ini memfasilitasi peperangan elektronik kooperatif serta teknik deteksi dan jamming RF secara simultan. Kontrol melalui PC atau tablet memungkinkan pemantauan dan penyesuaian, dengan opsi daya dari baterai yang dapat diisi ulang atau input AC. MERTER, sistem serangan elektronik paket manusia modern, dirancang untuk tahan terhadap kondisi lapangan taktis. Sistem ini dilengkapi dengan infrastruktur untuk memenuhi kebutuhan komprehensif peperangan elektronik kognitif generasi mendatang. Dengan menggunakan penerima RF pita lebar, sistem mendeteksi banyak target dengan beragam fitur dan menerapkan teknik serangan elektronik reaktif dalam skenario dinamis.</p><ul><li>Teknik Pengamatan &amp; Gangguan Berkelanjutan</li><li>Kemampuan Deteksi Sinyal, Gangguan &amp; Spoofing</li><li>Penerapan Berbagai Teknik Jamming Secara Bersamaan</li><li>Serangan Elektronik Cerdas Khusus Target Tertentu</li><li>Opsi untuk Penggunaan Antena Omnidirectional &amp; Directional</li><li>Kemampuan Gangguan Reaktif Secara Simultan dengan Beberapa Sistem EA Tersinkronisasi</li></ul>',
            'image' => 'typeGallery4.jpg',
            'created_at' => Carbon::now(),
        ]);

        DB::table('product_type_galleries')->insert([
            'type_id' => 2,
            'name' => 'STATIC – ILTER J350',
            'description' => '<p>ILTER J350, designed by Bogazici, comes as an advanced solution in the field of Drone Detection and Neutralization Systems, meticulously crafted to protect critical infrastructure and uphold security in various environments. With a diverse array of system components and advanced technical features, ILTER J350 is unmatched in its capacity to detect and swiftly counter unauthorized drone activity.</p><ul><li>Variable output power up to 800 Watts.</li><li>Protocol-based detection technology capable of identifying up to 30 threats.</li><li>Versatile operation in automatic or manual modes.</li><li>Centralized command control of all sensors and effectors.</li><li>Quick setup in less than 5 minutes with only one operator.</li><li>24-hour continuous operation in any weather conditions.</li></ul>',
            'nama' => 'STATIC – ILTER J350',
            'deskripsi' => '<p>ILTER J350, dirancang oleh Bogazici, hadir sebagai solusi canggih di bidang Sistem Deteksi dan Netralisasi Drone, dibuat dengan cermat untuk melindungi infrastruktur penting dan menjunjung keamanan di berbagai lingkungan. Dengan beragam komponen sistem dan fitur teknis canggih, ILTER J350 tidak tertandingi dalam kapasitasnya untuk mendeteksi dan dengan cepat melawan aktivitas drone yang tidak sah.</p><ul><li>Daya output variabel hingga 800 Watt.</li><li>Teknologi deteksi berbasis protokol yang mampu mengidentifikasi hingga 30 ancaman.</li><li>Pengoperasian serbaguna dalam mode otomatis atau manual.</li><li>Kontrol perintah terpusat dari semua sensor dan efektor.</li><li>Penyiapan cepat dalam waktu kurang dari 5 menit dengan hanya satu operator.</li><li>Pengoperasian terus menerus selama 24 jam dalam kondisi cuaca apa pun.</li></ul>',
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
