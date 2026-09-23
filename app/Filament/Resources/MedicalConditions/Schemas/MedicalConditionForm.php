<?php

namespace App\Filament\Resources\MedicalConditions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MedicalConditionForm
{
   public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true),
        ]);
        }
}
