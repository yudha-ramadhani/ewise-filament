<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RABDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tr_rab_details';

    protected $fillable = [
        'rab_id',
        'parent',
        'isi',
        'nilai_kontrak',
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

    public function rab()
    {
        return $this->belongsTo(RAB::class, 'rab_id');
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
