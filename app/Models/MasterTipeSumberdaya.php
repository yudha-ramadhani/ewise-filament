<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterTipeSumberdaya extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'master_tipe_sumberdayas';
    protected $fillable = [
        'nama_tipesumberdaya',
        'created_by'
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function sumberdayas()
    {
        return $this->hasMany(MasterSumberdaya::class, 'tipesumberdaya_id');
    }
}
