<?php

use App\Exports\MasterWBS;
use App\Http\Controllers\TemplateImportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('admin/download-master-wbs', [TemplateImportController::class, 'download'])->name('master-wbs.download');

Route::get('/', function () {
    return view('welcome');
});
