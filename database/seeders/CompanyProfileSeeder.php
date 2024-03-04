<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyProfileSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('company_profiles')->insert([
            'name' => 'name',
            'description' => 'Four Technologies Indonesia',
            // 'description' => 'Empat Teknologi Indonesia',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'nickname',
            'description' => 'ETI',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'legal_name',
            'description' => 'PT. Empat Teknologi Indonesia',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'vision',
            'description' => 'Leading the way as a security solution provider.',
            // 'description' => 'Menjadi terdepan dalam menjadi penyedia solusi keamanan.',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'mission',
            'description' => 'Build quality infrastructure and effective scope of work. deliver quality, fast, economical and reliable products and services.',
            // 'description' => 'Membangun infrastruktur yang berkualitas dan lingkup pekerjaan yang effektif. Memberikan produk dan jasa yang berkualitas, cepat, hemat dan handal.',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'website',
            'description' => 'www.etindonesia.id',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'email',
            'description' => 'admin@etindonesia.id',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'phone',
            'description' => '6287822726644',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'address_one',
            'description' => 'Office 8 Building, floor 18A. Jl. Senopati No 18 SCBD, Jakarta 12910 - Indonesia',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'address_two',
            'description' => 'Jl. Pendidikan No 17 - Cilandak, Jakarta 12430 - Indonesia',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'about',
            'description' => 'Established in 2014, we are an international technology company engaged in various programs, especially in the field of defense and security. We develop and supply products and systems for defense, security and commercial applications. defense, security and also apply to commercial needs.',
            // 'description' => 'PT Empat Teknologi Indonesia berdiri di Tahun 2014, Kami adalah perusahaan teknologi Internasional yang bergerak dalam berbagai program, terutama dibidang pertahanan dan keamanan. Kami mengembangkan dan memasok produk dan sistem untuk kebutuhan pertahanan, keamanan dan juga aplikasikan untuk kebutuhan komersil.',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'logo',
            'description' => 'logo.png',
            'created_at' => Carbon::now()
        ]);
    }
}
