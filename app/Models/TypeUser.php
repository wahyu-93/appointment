<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    use HasFactory;

    protected $table = 'type_user';

    public function detailusers()
    {
        return $this->hasMany(detailusers::class,'type_user_id');
    }

}
