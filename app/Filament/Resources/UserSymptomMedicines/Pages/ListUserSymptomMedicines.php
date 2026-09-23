<?php

namespace App\Filament\Resources\UserSymptomMedicines\Pages;

use App\Filament\Resources\UserSymptomMedicines\UserSymptomMedicineResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUserSymptomMedicines extends ListRecords
{
    protected static string $resource = UserSymptomMedicineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
