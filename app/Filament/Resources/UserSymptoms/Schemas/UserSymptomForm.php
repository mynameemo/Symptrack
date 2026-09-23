<?php

namespace App\Filament\Resources\UserSymptoms\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserSymptomForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('symptom_id')
                    ->required()
                    ->numeric(),
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('severity')
                    ->required()
                    ->numeric()
                    ->default(5),
                DatePicker::make('logged_at')
                    ->required(),
            ]);
    }
}
