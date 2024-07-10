<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyek extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'nama_proyek',
        'jenisproyek_id',
        'deskripsi',
        'nilai'
    ];

    public function jenisProyek()
    {
        return $this->belongsTo(MasterJenisProyek::class, 'jenisproyek_id');
    }
}
