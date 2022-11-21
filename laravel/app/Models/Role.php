<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const AUTHOR = 1;
    const EDITOR = 2;
    const ADMIN  = 3;

    protected $fillable = [
        'id',
        'name',
    ];
}

// use Spatie\Permission\Models\Role as SpatieRole;
 
// class Role extends SpatieRole
// {
//    const ADMIN = 'admin';
//    const AUTHOR = 'author';
//    const EDITOR = 'editor';

// }