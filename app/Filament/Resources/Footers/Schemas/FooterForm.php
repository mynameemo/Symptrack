<?php

namespace App\Filament\Resources\Footers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class FooterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('footer_title')
                    ->required(),
                Textarea::make('footer_description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('footer_email')
                    ->email()
                    ->required(),
                TextInput::make('footer_phone')
                    ->tel()
                    ->default(null),
                TextInput::make('footer_address')
                    ->default(null),
                FileUpload::make('footer_image')
                    ->image()
                    ->required(),
            ]);
    }
}
