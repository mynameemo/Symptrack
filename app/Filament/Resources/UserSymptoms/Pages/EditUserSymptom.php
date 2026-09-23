<?php

namespace App\Filament\Resources\UserSymptoms\Pages;

use App\Filament\Resources\UserSymptoms\UserSymptomResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUserSymptom extends EditRecord
{
    protected static string $resource = UserSymptomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
