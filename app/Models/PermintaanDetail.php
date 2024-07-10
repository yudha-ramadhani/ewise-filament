<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermintaanDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tr_permintaan_details';

    protected $fillable = [
        'permintaan_id',
        'rapkdetail_id',
        'uraian',
        'volume',
        'keterangan'
    ];

    public function permintaan()
    {
        return $this->belongsTo(Permintaan::class, 'permintaan_id');
    }

    public function rapkDetail()
    {
        return $this->belongsTo(RAPKDetail::class, 'rapkdetail_id');
    }
}
