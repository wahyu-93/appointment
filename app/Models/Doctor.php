<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function spesialist()
    {
        return $this->belongsTo(Specialist::class);
    }

    public function appoitments()
    {
        return $this->hasMany(Appoitment::class);
    }
}
