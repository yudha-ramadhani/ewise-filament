<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MasterSumberdaya extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'master_sumberdayas';
    protected $fillable = [
        'kode_resources',
        'nama_sumberdaya',
        'satuan',
        'tipesumberdaya_id',
        'created_by'
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function tipeSumberdaya()
    {
        return $this->belongsTo(MasterTipeSumberdaya::class, 'tipesumberdaya_id');
    }
}
