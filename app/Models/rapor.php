<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rapor extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'semester_id',
        'kelas_id',
        'walikelas_id',
        'nilai_sikap',
        'catatan_wali_kelas'
    ];

    // relasi many-to-one dengan siswa
    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }

    // relasi many-to-one dengan semester
    public function semester()
    {
        return $this->belongsTo(semester::class);
    }

    // relasi  many-to-one dengan kelas
    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }

    // relasi many-to-one dengan walikelas
    public function walikelas()
    {
        return $this->belongsTo(walikelas::class);
    }
}
