<?php

namespace App\Filament\Resources\UserSymptomMedicines\Pages;

use App\Filament\Resources\UserSymptomMedicines\UserSymptomMedicineResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUserSymptomMedicine extends EditRecord
{
    protected static string $resource = UserSymptomMedicineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
