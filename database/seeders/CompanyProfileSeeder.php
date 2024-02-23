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
            'description' => 'Empat Teknologi Indonesia',
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
            'description' => 'Menjadi terdepan dalam menjadi penyedia solusi keamanan.',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'mission',
            'description' => 'Membangun infrastruktur yang berkualitas dan lingkup pekerjaan yang effektif. Memberikan produk dan jasa yang berkualitas, cepat, hemat dan handal.',
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
            'name' => 'address_one',
            'description' => 'Office 8 Building, floor 18A. Jl. Senopati No 18 SCBD, Jakarta 12910 - Indonesia',
            'created_at' => Carbon::now()
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'address_two',
            'description' => 'Jl. Pendidikan No 17 - Cilandak, Jakarta 12430 - Indonesia',
            'created_at' => Carbon::now()
        ]);
    }
}
