<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterJenisDokumen extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'master_jenis_dokumens';

    protected $fillable = [
        'nama_dokumen'
    ];

    public function biayas()
    {
        return $this->hasMany(Biaya::class, 'jenisdokumen_id');
    }
}
