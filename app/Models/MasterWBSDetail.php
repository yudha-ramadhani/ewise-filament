<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterWBSDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'kode',
        'level',
        'parent_id',
        'deskripsi',
        'wbs_id',
        'created_by',
    ];

    public function parent()
    {
        return $this->belongsTo(MasterWBSDetail::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(MasterWBSDetail::class, 'parent_id');
    }

    public function wbs()
    {
        return $this->belongsTo(MasterWBS::class, 'wbs_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}

