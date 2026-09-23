<?php

namespace App\Filament\Resources\WTES\Pages;

use App\Filament\Resources\WTES\WTEResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWTES extends ListRecords
{
    protected static string $resource = WTEResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
