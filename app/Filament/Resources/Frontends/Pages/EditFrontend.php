<?php

namespace App\Filament\Resources\Frontends\Pages;

use App\Filament\Resources\Frontends\FrontendResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFrontend extends EditRecord
{
    protected static string $resource = FrontendResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
