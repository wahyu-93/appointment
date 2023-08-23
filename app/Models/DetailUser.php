<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    use HasFactory;

    protected $table = 'detail_user';

    public function typeUser()
    {
        return $this->belongsTo(typeUser::class, 'type_user_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
