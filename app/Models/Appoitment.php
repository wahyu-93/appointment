<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoitment extends Model
{
    use HasFactory;

    public function doctor()
    {
        return $this->belongsTo(doctor::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
