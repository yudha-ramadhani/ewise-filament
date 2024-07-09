<?php

namespace App\Filament\Resources\MasterWBSResource\Pages;

use App\Filament\Resources\MasterWBSResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMasterWBS extends EditRecord
{
    protected static string $resource = MasterWBSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
