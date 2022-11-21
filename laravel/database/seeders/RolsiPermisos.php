<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolsiPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $adminRole = Role::create(['name' => 'admin']);
        $authorRole = Role::create(['name' => 'author']);
        $editorRole = Role::create(['name' => 'editor']);


        Permission::create(['name' => 'files.*']);
        Permission::create(['name' => 'files.list']);
        Permission::create(['name' => 'files.create']);
        Permission::create(['name' => 'files.update']);
        Permission::create(['name' => 'files.read']);
        Permission::create(['name' => 'files.delete']);



        $adminRole->givePermissionTo(['*']);
        $authorRole->givePermissionTo(['read', 'list']);
        $editorRole->givePermissionTo(['read', 'list']);




        $name  = config('admin.name');
        $admin = User::where('admin', $name)->first();
        $admin->assignRole('admin');





    }
}
