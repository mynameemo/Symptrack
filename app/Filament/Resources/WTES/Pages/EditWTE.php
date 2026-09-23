<?php

namespace App\Filament\Resources\WTES\Pages;

use App\Filament\Resources\WTES\WTEResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWTE extends EditRecord
{
    protected static string $resource = WTEResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
