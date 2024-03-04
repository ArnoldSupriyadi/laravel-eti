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
            'created_at' => Carbon::now()
        ]);
        DB::table('core_values')->insert([
            'name' => 'EMPLOYEE EXCELLENCE',
            'description' => 'Great people are key to achieving our vision. We employ a workforce that is motivated, team-minded, and create a dynamic atmosphere where employees can thrive and reach their highest potential. their highest potential.',
            'created_at' => Carbon::now()
        ]);
        DB::table('core_values')->insert([
            'name' => 'INNOVATION AND CREATIVITY',
            'description' => 'We foster an environment that nurtures innovation, creativity and leardership.',
            'created_at' => Carbon::now()
        ]);
        DB::table('core_values')->insert([
            'name' => 'TEAMWORK AND SYNERGY',
            'description' => 'Personal interactions and mutual trust form the basis for achieving our goals. In our complex world, cooperation and teamwork lead to synergy.',
            'created_at' => Carbon::now()
        ]);
        DB::table('core_values')->insert([
            'name' => 'RESPONSIBILITY AND ACCOUNTABILITY',
            'description' => 'We are committed to the success of our company through personal responsibility and leadership.',
            'created_at' => Carbon::now()
        ]);
        DB::table('core_values')->insert([
            'name' => 'HONESTY AND ETHICS',
            'description' => 'Honesty, respect and integrity are the key principles that guide us.',
            'created_at' => Carbon::now()
        ]);
    }
}
