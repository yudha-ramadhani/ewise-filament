<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterTipeUsaha extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'master_tipe_usahas';
    protected $fillable = [
        'nama_tipeusaha',
        'created_by'
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function vendors()
    {
        return $this->hasMany(MasterVendor::class, 'tipeusaha_id');
    }
}
