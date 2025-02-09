<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $superadminRole = Role::create([
            'name' => 'superadmin',
            'guard_name' => 'web',
            'created_at' => Carbon::now()
        ]);

        $adminRole = Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
            'created_at' => Carbon::now()
        ]);

        $adminRole->givePermissionTo('view_users');
    }
}
