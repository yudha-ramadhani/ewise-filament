<?php

namespace App\Filament\Resources\MasterDetailWBSResource\Pages;

use App\Filament\Resources\MasterDetailWBSResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMasterDetailWBS extends EditRecord
{
    protected static string $resource = MasterDetailWBSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
