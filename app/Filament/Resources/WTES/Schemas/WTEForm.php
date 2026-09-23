<?php

namespace App\Filament\Resources\WTES\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class WTEForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('wte_heading')
                    ->required(),
                Textarea::make('wte_description')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
