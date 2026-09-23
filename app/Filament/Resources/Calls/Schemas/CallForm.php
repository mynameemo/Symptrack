<?php

namespace App\Filament\Resources\Calls\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CallForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('contact_number1')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('contact_number2')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
