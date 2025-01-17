<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name'=>'post view']);
        Permission::create(['name'=>'post create']);
        Permission::create(['name'=>'post update']);
        Permission::create(['name'=>'post delete']);

        Permission::create(['name'=>'user view']);
        Permission::create(['name'=>'user create']);
        Permission::create(['name'=>'user update']);
        Permission::create(['name'=>'user delete']);
    }
}
