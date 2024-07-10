<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RAPK extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tr_rapks';

    protected $fillable = [
        'proyek_id',
        'locked'
    ];

    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'proyek_id');
    }

    public function rapkDetails()
    {
        return $this->hasMany(RAPKDetail::class, 'rapk_id');
    }
}
