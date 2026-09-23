<?php

namespace App\Filament\Resources\MentalHealthConditions\Pages;

use App\Filament\Resources\MentalHealthConditions\MentalHealthConditionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMentalHealthConditions extends ListRecords
{
    protected static string $resource = MentalHealthConditionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
