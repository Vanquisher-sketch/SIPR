<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class semester extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_semester',
        'tahun_ajaran'
    ];

    // relasi one-to-many dengan nilai
    public function nilai()
    {
        return $this->hasMany(nilai::class);
    }
}
