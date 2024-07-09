<?php

namespace App\Http\Controllers;

use App\Exports\MasterWBSExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class TemplateImportController extends Controller
{
    public function download(): BinaryFileResponse
    {
        return Excel::download(new MasterWBSExport, 'Master WBS.xlsx');
    }

}
