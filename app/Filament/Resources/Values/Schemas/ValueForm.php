<?php

namespace App\Filament\Resources\Values\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ValueForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('value_title')
                    ->required(),
                Textarea::make('value_description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
