<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterVendor extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'master_vendors';
    protected $fillable = [
        'nama_vendor',
        'tipeusaha_id',
        'domisili',
        'kodepos',
        'alamat',
        'taxnum',
        'created_by'
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function tipeUsaha()
    {
        return $this->belongsTo(MasterTipeUsaha::class, 'tipeusaha_id');
    }

    public function banks()
    {
        return $this->hasMany(MasterVendorBank::class, 'vendor_id');
    }
}
