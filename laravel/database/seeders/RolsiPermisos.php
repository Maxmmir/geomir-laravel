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

        Permission::create(['name' => 'post.*']);
        Permission::create(['name' => 'post.list']);
        Permission::create(['name' => 'post.create']);
        Permission::create(['name' => 'post.update']);
        Permission::create(['name' => 'post.read']);
        Permission::create(['name' => 'post.delete']);

        Permission::create(['name' => 'place.*']);
        Permission::create(['name' => 'place.list']);
        Permission::create(['name' => 'place.create']);
        Permission::create(['name' => 'place.update']);
        Permission::create(['name' => 'place.read']);
        Permission::create(['name' => 'place.delete']);

        Permission::create(['name' => 'user.*']);
        Permission::create(['name' => 'user.list']);
        Permission::create(['name' => 'user.create']);
        Permission::create(['name' => 'user.update']);
        Permission::create(['name' => 'user.read']);
        Permission::create(['name' => 'user.delete']);


        $adminRole->givePermissionTo(['*']);
        $authorRole->givePermissionTo(['read', 'list', 'update', 'create']);
        $editorRole->givePermissionTo(['read', 'list', 'update', 'create']);




        $name  = config('admin.name');
        $admin = User::where('admin', $name)->first();
        $admin->assignRole('admin');
