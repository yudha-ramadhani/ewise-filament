<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Biaya extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tr_biayas';

    protected $fillable = [
        'proyek_id',
        'no_bukti',
        'tanggal_bukti',
        'vendor_id',
        'tgl_mulai',
        'tgl_selesai',
        'jenisdokumen_id'
    ];

    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'proyek_id');
    }

    public function vendor()
    {
        return $this->belongsTo(MasterVendor::class, 'vendor_id');
    }

    public function jenisDokumen()
    {
        return $this->belongsTo(MasterJenisDokumen::class, 'jenisdokumen_id');
    }

    public function biayaDetails()
    {
        return $this->hasMany(BiayaDetail::class, 'biaya_id');
    }
}
