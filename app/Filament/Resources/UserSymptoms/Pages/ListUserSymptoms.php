<?php

namespace App\Filament\Resources\UserSymptoms\Pages;

use App\Filament\Resources\UserSymptoms\UserSymptomResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUserSymptoms extends ListRecords
{
    protected static string $resource = UserSymptomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
