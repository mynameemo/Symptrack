<?php

namespace App\Filament\Resources\UserTriggers\Pages;

use App\Filament\Resources\UserTriggers\UserTriggerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUserTriggers extends ListRecords
{
    protected static string $resource = UserTriggerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
