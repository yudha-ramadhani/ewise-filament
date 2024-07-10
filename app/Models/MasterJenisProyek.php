<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterJenisProyek extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'master_jenis_proyeks';
    protected $fillable = [
        'kode',
        'nama_jenisproyek',
        'created_by'
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function proyeks()
    {
        return $this->hasMany(Proyek::class, 'jenisproyek_id');
    }
}
