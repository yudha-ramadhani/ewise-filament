<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RAPKDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tr_rapk_details';

    protected $fillable = [
        'rapk_id',
        'rabdetail_id',
        'wbsdetail_id',
        'sumberdaya_id',
        'parent',
        'volume',
        'harga',
        'total',
        'created_by',
        'updated_by'
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function rapk()
    {
        return $this->belongsTo(RAPK::class, 'rapk_id');
    }

    public function rabDetail()
    {
        return $this->belongsTo(RABDetail::class, 'rabdetail_id');
    }

    public function wbsDetail()
    {
        return $this->belongsTo(MasterWBSDetail::class, 'wbsdetail_id');
    }

    public function sumberdaya()
    {
        return $this->belongsTo(MasterSumberdaya::class, 'sumberdaya_id');
    }

    public function parentDetail()
    {
        return $this->belongsTo(self::class, 'parent');
    }

    public function childDetails()
    {
        return $this->hasMany(self::class, 'parent');
    }
}
