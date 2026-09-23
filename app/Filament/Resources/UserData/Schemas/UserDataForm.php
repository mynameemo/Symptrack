<?php

namespace App\Filament\Resources\UserData\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class UserDataForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_name')
                    ->required(),
                TextInput::make('symptom_name')
                    ->required(),
                DateTimePicker::make('logged_at')
                    ->required(),
                TextInput::make('severity')
                    ->required()
                    ->numeric(),
                TextInput::make('duration_value')
                    ->required()
                    ->numeric(),
                TextInput::make('duration_unit')
                    ->required(),
                TextInput::make('trigger_name')
                    ->required(),
                TextInput::make('medication_name')
                    ->default(null),
                TextInput::make('medication_dosage')
                    ->default(null),
                Textarea::make('notes')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
