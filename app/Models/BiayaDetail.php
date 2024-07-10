<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BiayaDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tr_biaya_details';

    protected $fillable = [
        'biaya_id',
        'rapkdetail_id',
        'permintaan_id',
        'uraian',
        'volume',
        'harga',
        'jumlah',
        'ppn'
    ];

    public function biaya()
    {
        return $this->belongsTo(Biaya::class, 'biaya_id');
    }

    public function rapkDetail()
    {
        return $this->belongsTo(RAPKDetail::class, 'rapkdetail_id');
    }

    public function permintaan()
    {
        return $this->belongsTo(Permintaan::class, 'permintaan_id');
    }
}
