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
            'description_indo' => 'Empat Teknologi Indonesia',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'nickname',
            'description' => 'ETI',
            'description_indo' => 'ETI',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'legal_name',
            'description' => 'PT. Empat Teknologi Indonesia',
            'description_indo' => 'PT. Empat Teknologi Indonesia',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'vision',
            'description' => 'Leading the way as a security solution provider.',
            'description_indo' => 'Menjadi terdepan dalam menjadi penyedia solusi keamanan.',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'mission',
            'description' => 'Build quality infrastructure and effective scope of work. deliver quality, fast, economical and reliable products and services.',
            'description_indo' => 'Membangun infrastruktur yang berkualitas dan lingkup pekerjaan yang effektif. Memberikan produk dan jasa yang berkualitas, cepat, hemat dan handal.',
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
            'description_indo' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'address_two',
            'description' => 'Jl. Pendidikan No 17 - Cilandak, Jakarta 12430 - Indonesia',
            'description_indo' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'about',
            'description' => 'Established in 2014, we are an international technology company engaged in various programs, especially in the field of defense and security. We develop and supply products and systems for defense, security and commercial applications. defense, security and also apply to commercial needs.',
            'description_indo' => 'PT Empat Teknologi Indonesia berdiri di Tahun 2014, Kami adalah perusahaan teknologi Internasional yang bergerak dalam berbagai program, terutama dibidang pertahanan dan keamanan. Kami mengembangkan dan memasok produk dan sistem untuk kebutuhan pertahanan, keamanan dan juga aplikasikan untuk kebutuhan komersil.',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'logo',
            'description' => 'logo.png',
            'description_indo' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'about_image',
            'description' => 'about_img.jpg',
            'description_indo' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'about_image2',
            'description' => 'about_img2.jpg',
            'description_indo' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'productservice_image',
            'description' => 'productservice_img.jpg',
            'description_indo' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'product_description',
            'description' => 'We are proud to introduce our superior range of products and services designed to meet your needs with the highest quality. With our dedication to innovation and excellence, we are committed to providing a satisfying experience for every customer.',
            'description_indo' => 'Kami bangga memperkenalkan rangkaian produk dan layanan unggulan kami yang dirancang untuk memenuhi kebutuhan Anda dengan kualitas terbaik. Dengan dedikasi kami terhadap inovasi dan keunggulan, kami berkomitmen untuk memberikan pengalaman yang memuaskan bagi setiap pelanggan.',
            'created_at' => Carbon::now()
        ]);
    }
}
