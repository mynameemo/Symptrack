<?php

namespace App\Filament\Resources\Locations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('contact_heading')
                    ->required(),
                TextInput::make('contact_information')
                    ->required(),
                TextInput::make('contact_option')
                    ->required(),
            ]);
    }
}
