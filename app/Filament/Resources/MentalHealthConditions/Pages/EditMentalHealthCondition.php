<?php

namespace App\Filament\Resources\MentalHealthConditions\Pages;

use App\Filament\Resources\MentalHealthConditions\MentalHealthConditionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMentalHealthCondition extends EditRecord
{
    protected static string $resource = MentalHealthConditionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
