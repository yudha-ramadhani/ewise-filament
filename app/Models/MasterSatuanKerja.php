<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterSatuanKerja extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'master_satuan_kerjas';
    protected $fillable = [
        'nama_satuankerja',
        'created_by'
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
