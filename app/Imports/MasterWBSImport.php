<?php

namespace App\Imports;

use App\Models\MasterJenisProyek;
use App\Models\MasterWBS;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MasterWBSImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $jenisproyek_id = self::getJenisProyekId($row['jenisproyek']);
        return new MasterWBS([
            'jenisproyek_id' => $jenisproyek_id,
            'nama_wbs' => $row['nama_wbs'],
            'kode' => $row['kode'],
            'created_by' => Auth::user()->id,
        ]);
    }

    public static function getJenisProyekId(string $jenisproyek)
    {
        return MasterJenisProyek::where('nama_jenisproyek', $jenisproyek)->first()->id;
    }
}
