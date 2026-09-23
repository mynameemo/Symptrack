<?php

namespace App\Filament\Resources\UserTriggers\Pages;

use App\Filament\Resources\UserTriggers\UserTriggerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUserTrigger extends EditRecord
{
    protected static string $resource = UserTriggerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
