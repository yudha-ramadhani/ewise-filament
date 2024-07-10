<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permintaan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tr_permintaans';

    protected $fillable = [
        'proyek_id',
        'no_bukti',
        'tgl_request',
        'tgl_mulai',
        'tgl_selesai'
    ];

    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'proyek_id');
    }

    public function permintaanDetails()
    {
        return $this->hasMany(PermintaanDetail::class, 'permintaan_id');
    }
}
