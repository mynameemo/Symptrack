<?php

namespace App\Filament\Resources\Triggers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TriggerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
            ]);
    }
}
