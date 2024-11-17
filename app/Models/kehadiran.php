<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kehadiran extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'semester_id',
        'total_hadir',
        'total_sakit',
        'total_izin',
        'total_alpha'
    ];

    // relasi many-to-one dengan siswa
    public function siswa()
    {
        return $this->belongsTo(semester::class);
    }

    // relasi many-to-one dengan semester
    public function semester()
    {
        return $this->belongsTo(semester::class);
    }
}
