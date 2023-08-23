<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function roleUsers()
    {
        return $this->hasMany(roleUsers::class);
    }

    public function permissionRole()
    {
        return $this->hasMany(permissionRole::class);
    }
}
