<?php

namespace App\Filament\Resources\MasterWBSResource\Pages;

use Filament\Actions;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\MasterWBSResource;
use EightyNine\ExcelImport\ExcelImportAction;
use App\Imports\MasterWBSImport;

class ListMasterWBS extends ListRecords
{
    protected static string $resource = MasterWBSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ExcelImportAction::make()
                ->color("primary")
                ->use(MasterWBSImport::class),
            Actions\CreateAction::make(),
            Action::make('Export Data')
                ->label('Export Data')
                ->url(route('master-wbs.download'))
                ->icon('heroicon-o-rectangle-stack'),
        ];
    }
}
