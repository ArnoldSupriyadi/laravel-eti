<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::create([
            'name' => 'view_users',
            'guard_name' => 'web',
            'created_at' => Carbon::now()
        ]);

        Permission::create([
            'name' => 'create_users',
            'guard_name' => 'web',
            'created_at' => Carbon::now()
        ]);

        Permission::create([
            'name' => 'edit_users',
            'guard_name' => 'web',
            'created_at' => Carbon::now()
        ]);

        Permission::create([
            'name' => 'delete_users',
            'guard_name' => 'web',
            'created_at' => Carbon::now()
        ]);
    }
}
