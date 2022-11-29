<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Role;
use App\Models\Permission;

// // use app\Models\Role;
// use app\Models\User;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;


class RoleAndPermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Roles
        $authorRole = Role::create(['name' => Role::AUTHOR]);
        $editorRole = Role::create(['name' => Role::EDITOR]);
        $adminRole  = Role::create(['name' => Role::ADMIN]);

        // Permissions
        Permission::create(['name' => Permission::CONTENT_ADMINISTRATION]);
        Permission::create(['name' => Permission::CONTENT_MODERATION]);

        Permission::create(['name' => Permission::USERS]);
        Permission::create(['name' => Permission::USERS_LIST]);
        Permission::create(['name' => Permission::USERS_CREATE]);
        Permission::create(['name' => Permission::USERS_READ]);
        Permission::create(['name' => Permission::USERS_UPDATE]);
        Permission::create(['name' => Permission::USERS_DELETE]);

        Permission::create(['name' => Permission::FILES]);
        Permission::create(['name' => Permission::FILES_LIST]);
        Permission::create(['name' => Permission::FILES_CREATE]);
        Permission::create(['name' => Permission::FILES_READ]);
        Permission::create(['name' => Permission::FILES_UPDATE]);
        Permission::create(['name' => Permission::FILES_DELETE]);
        
        Permission::create(['name' => Permission::POSTS]);
        Permission::create(['name' => Permission::POSTS_LIST]);
        Permission::create(['name' => Permission::POSTS_CREATE]);
        Permission::create(['name' => Permission::POSTS_READ]);
        Permission::create(['name' => Permission::POSTS_UPDATE]);
        Permission::create(['name' => Permission::POSTS_DELETE]);

        Permission::create(['name' => Permission::PLACES]);
        Permission::create(['name' => Permission::PLACES_LIST]);
        Permission::create(['name' => Permission::PLACES_CREATE]);
        Permission::create(['name' => Permission::PLACES_READ]);
        Permission::create(['name' => Permission::PLACES_UPDATE]);
        Permission::create(['name' => Permission::PLACES_DELETE]);

        // Assign permissions to author role
        $authorRole->givePermissionTo([
            Permission::POSTS_LIST,
            Permission::POSTS_CREATE,
            Permission::POSTS_READ,
            Permission::POSTS_DELETE,
            Permission::PLACES_LIST,
            Permission::PLACES_CREATE,
            Permission::PLACES_READ,
            Permission::PLACES_UPDATE,
            Permission::PLACES_DELETE,
        ]);

        // Assign permissions to editor role
        $editorRole->givePermissionTo([
            Permission::POSTS_LIST,
            Permission::POSTS_READ,
            Permission::PLACES_LIST,
            Permission::PLACES_READ,
            Permission::CONTENT_MODERATION,
        ]);

        // Assign permissions to editor role
        $adminRole->givePermissionTo([
            Permission::USERS,
            Permission::FILES,
            Permission::CONTENT_ADMINISTRATION,
        ]);

        // Update admin user
        $name  = config('admin.name');
        $admin = User::where('name', $name)->first();
        $admin->assignRole(Role::ADMIN);
    }
}









// namespace Database\Seeders;



// class RolsiPermisos extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         //
//         $adminRole = Role::create(['name' => 'admin']);
//         $authorRole = Role::create(['name' => 'author']);
//         $editorRole = Role::create(['name' => 'editor']);



//         Permission::create(['name' => 'files.*']);
//         Permission::create(['name' => 'files.list']);
//         Permission::create(['name' => 'files.create']);
//         Permission::create(['name' => 'files.update']);
//         Permission::create(['name' => 'files.read']);
//         Permission::create(['name' => 'files.delete']);

//         Permission::create(['name' => 'post.*']);
//         Permission::create(['name' => 'post.list']);
//         Permission::create(['name' => 'post.create']);
//         Permission::create(['name' => 'post.update']);
//         Permission::create(['name' => 'post.read']);
//         Permission::create(['name' => 'post.delete']);

//         Permission::create(['name' => 'place.*']);
//         Permission::create(['name' => 'place.list']);
//         Permission::create(['name' => 'place.create']);
//         Permission::create(['name' => 'place.update']);
//         Permission::create(['name' => 'place.read']);
//         Permission::create(['name' => 'place.delete']);

//         Permission::create(['name' => 'user.*']);
//         Permission::create(['name' => 'user.list']);
//         Permission::create(['name' => 'user.create']);
//         Permission::create(['name' => 'user.update']);
//         Permission::create(['name' => 'user.read']);
//         Permission::create(['name' => 'user.delete']);


//         $adminRole->givePermissionTo(['*']);
//         $authorRole->givePermissionTo(['list', 'create', 'update', 'read', 'delete']);
//         $editorRole->givePermissionTo(['list', 'create', 'update', 'read', 'delete']);

//         $name  = config('admin.name');
//         $admin = User::where('admin', $name)->first();
//         $admin->assignRole('admin');
//     }
// }