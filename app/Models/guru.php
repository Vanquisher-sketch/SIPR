<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_guru',
        'nip',
        'alamat',
        'no_telepon',
        'user_id'
    ];

    // Relasi one-to-one dengan user
    public function user()
    {
        return $this->belongsTo(user::class);
    }

    // Relasi one-to-one dengan walikelas
    public function walikelas()
    {
        return $this->hasOne(walikelas::class);
    }
}
