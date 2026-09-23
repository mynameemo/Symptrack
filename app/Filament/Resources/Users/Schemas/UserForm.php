<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('phonenumber')
                    ->tel()
                    ->required(),
                TextInput::make('gender')
                    ->required(),
                Textarea::make('address')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                Textarea::make('profileImage')
                    ->required()
                    ->default('my_profile.png')
                    ->columnSpanFull(),
                Toggle::make('is_admin')
                    ->required(),

                Select::make('medicalConditions')
                    ->relationship('medicalConditions', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable(),

                Select::make('mentalHealthConditions')
                    ->relationship('mentalHealthConditions', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable(),    
            ]);
    }
}
