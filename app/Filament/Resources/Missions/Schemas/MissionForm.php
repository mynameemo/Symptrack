<?php

namespace App\Filament\Resources\Missions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('mission_image')
                    ->required()
                    ->default('Image.jpeg')
                    ->columnSpanFull(),
                TextInput::make('mission_title')
                    ->default(null),
                Textarea::make('mission_description')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
