<?php

namespace App\Filament\Resources\Triggers\Pages;

use App\Filament\Resources\Triggers\TriggerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTriggers extends ListRecords
{
    protected static string $resource = TriggerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
