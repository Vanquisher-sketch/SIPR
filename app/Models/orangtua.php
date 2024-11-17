<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orangtua extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_orang_tua',
        'alamat',
        'no_telepon',
        'user_id'
    ];

    // relasi one-to-one dengan user
    public function user()
    {
        return $this->belongsTo(user::class);
    }

    // relasi one-to-many dengan siswa
    public function siswa()
    {
        return $this->hasMany(siswa::class);
    }
}
