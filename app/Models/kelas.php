<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kelas',
        'walikelas_id'
    ];

    // relasi one-to-one dengan walikelas
    public function walikelas()
    {
        return $this->hasOne(walikelas::class);
    }

    // relasi one-to-many dengan rapor
    public function rapor()
    {
        return $this->hasMany(rapor::class);
    }
}
