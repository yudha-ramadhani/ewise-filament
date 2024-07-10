<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterVendorBank extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'master_vendors_banks';
    protected $fillable = [
        'vendor_id',
        'nama_bank',
        'negara',
        'alamat',
        'no_rekening',
        'created_by'
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function vendor()
    {
        return $this->belongsTo(MasterVendor::class, 'vendor_id');
    }
}
