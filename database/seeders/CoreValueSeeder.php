<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoreValueSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('core_values')->insert([
            'name' => 'CUSTOMER FOCUSED',
            'description' => 'We adapt to our customers needs and respond to them with affordable, operationally proven, comprehensive solutions that offer qualitative performance advantages.',
            'nama' => 'FOKUS PADA PELANGGAN',
            'deskripsi' => 'Kami beradaptasi dengan kebutuhan pelanggan kami dan meresponsnya dengan solusi yang terjangkau, terbukti secara operasional, dan komprehensif yang menawarkan keunggulan kinerja kualitatif.',
            'created_at' => Carbon::now()
        ]);
        DB::table('core_values')->insert([
            'name' => 'EMPLOYEE EXCELLENCE',
            'description' => 'Great people are key to achieving our vision. We employ a workforce that is motivated, team-minded, and create a dynamic atmosphere where employees can thrive and reach their highest potential. their highest potential.',
            'nama' => 'KEUNGGULAN KARYAWAN',
            'deskripsi' => 'Orang-orang hebat adalah kunci untuk mencapai visi kami. Kami mempekerjakan tenaga kerja yang termotivasi, berjiwa tim, dan menciptakan suasana dinamis di mana karyawan dapat berkembang dan mencapai potensi tertinggi mereka. potensi tertinggi mereka.',
            'created_at' => Carbon::now()
        ]);
        DB::table('core_values')->insert([
            'name' => 'INNOVATION AND CREATIVITY',
            'description' => 'We foster an environment that nurtures innovation, creativity and leardership.',
            'nama' => 'INOVASI DAN KREATIVITAS',
            'deskripsi' => 'Kami memupuk lingkungan yang memupuk inovasi, kreativitas, dan kepemimpinan.',
            'created_at' => Carbon::now()
        ]);
        DB::table('core_values')->insert([
            'name' => 'TEAMWORK AND SYNERGY',
            'description' => 'Personal interactions and mutual trust form the basis for achieving our goals. In our complex world, cooperation and teamwork lead to synergy.',
            'nama' => 'KERJA SAMA DAN SINERGI TIM',
            'deskripsi' => 'Interaksi pribadi dan rasa saling percaya menjadi dasar untuk mencapai tujuan kami. Dalam dunia kita yang kompleks, kerja sama dan kerja sama tim menghasilkan sinergi.',
            'created_at' => Carbon::now()
        ]);
        DB::table('core_values')->insert([
            'name' => 'RESPONSIBILITY AND ACCOUNTABILITY',
            'description' => 'We are committed to the success of our company through personal responsibility and leadership.',
            'nama' => 'TANGGUNG JAWAB DAN AKUNTABILITAS',
            'deskripsi' => 'Kami berkomitmen terhadap kesuksesan perusahaan kami melalui tanggung jawab pribadi dan kepemimpinan.',
            'created_at' => Carbon::now()
        ]);
        DB::table('core_values')->insert([
            'name' => 'HONESTY AND ETHICS',
            'description' => 'Honesty, respect and integrity are the key principles that guide us.',
            'nama' => 'KEJUJURAN DAN ETIKA',
            'deskripsi' => 'Kejujuran, rasa hormat, dan integritas adalah prinsip-prinsip utama yang memandu kami.',
            'created_at' => Carbon::now()
        ]);
    }
}
