<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'mapel_id',
        'semester_id',
        'nilai_tugas',
        'nilai_uts',
        'nilai_uas',
        'nilai_akhir'
    ];

    // relasi many-to-one dengan siswa
    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }

    // relasi many-to-one dengan mapel
    public function mapel()
    {
        return $this->belongsTo(mapel::class);
    }

    // relasi many-to-one dengan semester
    public function semester()
    {
        return $this->belongsTo(semester::class);
    }
}
