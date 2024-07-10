<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterWBS extends Model
{
    use SoftDeletes;
    protected $table = 'master_wbs';
    protected $fillable = [
        'jenisproyek_id',
        'nama_wbs',
        'kode',
        'created_by',
    ];

    public function jenisProyek()
    {
        return $this->belongsTo(MasterJenisProyek::class, 'jenisproyek_id');
    }

    public function details()
    {
        return $this->hasMany(MasterWBSDetail::class, 'wbs_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
