<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class walikelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id',
        'kelas_id'
    ];

    // relasi one-to-one dengan guru
    public function guru()
    {
        return $this->belongsTo(guru::class);
    }

    // relasi one-to-one dengan kelas
    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }
}
