<?php

namespace App\Filament\Resources\Frontends\Pages;

use App\Filament\Resources\Frontends\FrontendResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFrontends extends ListRecords
{
    protected static string $resource = FrontendResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
