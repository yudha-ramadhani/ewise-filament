<?php

namespace App\Exports;

use App\Models\MasterWBS;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class MasterWBSExport implements FromCollection
{
    use Exportable;

    public function collection()
    {
        return MasterWBS::all();
    }
}
