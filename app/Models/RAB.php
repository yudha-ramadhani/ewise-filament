<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RAB extends Model
{
    use SoftDeletes;

    protected $table = 'tr_rabs';

    protected $fillable = [
        'proyek_id',
        'locked'
    ];

    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'proyek_id');
    }

    public function rabDetails()
    {
        return $this->hasMany(RABDetail::class, 'rab_id');
    }
}
