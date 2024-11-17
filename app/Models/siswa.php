<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisn',
        'nama_siswa',
        'tanggal_lahir',
        'alamat',
        'orang_tua_id'

    ];

    // relasi one-to-many dengan nilai
    public function nilai()
    {
        return $this->hasMany(nilai::class);
    }

    // relasi one-to-many dengan kehadiran
    public function kehadiran()
    {
        return $this->hasMany(kehadiran::class);
    }

    // relasi one-to-many dengan rapor
    public function rapor()
    {
        return $this->hasMany(rapor::class);
    }

    // relasi many-to-one dengan orangtua
    public function orangtua()
    {
        return $this->belongsTo(orangtua::class);
    }
}
