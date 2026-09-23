<?php

namespace App\Filament\Resources\UserSymptomMedicines\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserSymptomMedicineForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_symptom_id')
                    ->required()
                    ->numeric(),
                TextInput::make('medicine_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
