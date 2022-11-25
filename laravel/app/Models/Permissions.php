<?php

 
namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Role extends SpatieRole
{
    const ADMIN = 'admin';
    const AUTHOR = 'author';
    const EDITOR = 'editor';
}

class Permission extends SpatiePermission
{
   const FILES        = 'files.*';
   const FILES_LIST   = 'files.list';
   const FILES_CREATE = 'files.create';
   const FILES_READ   = 'files.read';
   const FILES_UPDATE = 'files.update';
   const FILES_DELETE = 'files.delete';
   

   const POST        = 'post.*';
   const POST_LIST   = 'post.list';
   const POST_CREATE = 'post.create';
   const POST_READ   = 'post.read';
   const POST_UPDATE = 'post.update';
   const POST_DELETE = 'post.delete';
   
   const PLACE        = 'place.*';
   const PLACE_LIST   = 'place.list';
   const PLACE_CREATE = 'place.create';
   const PLACE_READ   = 'place.read';
   const PLACE_UPDATE = 'place.update';
   const PLACE_DELETE = 'place.delete';

   const USER        = 'user.*';
   const USER_LIST   = 'user.list';
   const USER_CREATE = 'user.create';
   const USER_READ   = 'user.read';
   const USER_UPDATE = 'user.update';
   const USER_DELETE = 'user.delete';
   
}



// $name  = config('admin.name');
// $admin = User::where('name', $name)->first();
// $admin->assignRole('admin');


// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Permissions extends Model
// {
//     use HasFactory;
// }
