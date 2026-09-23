<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('about_image')
                    ->required()
                    ->default('Image.jpeg')
                    ->columnSpanFull(),
                TextInput::make('about_title')
                    ->default(null),
                Textarea::make('about_description')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
