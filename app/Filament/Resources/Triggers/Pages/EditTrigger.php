<?php

namespace App\Filament\Resources\Triggers\Pages;

use App\Filament\Resources\Triggers\TriggerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTrigger extends EditRecord
{
    protected static string $resource = TriggerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
