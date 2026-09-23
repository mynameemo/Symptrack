<?php

namespace App\Filament\Resources\UserData\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UserDataTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user_name')
                    ->searchable(),
                TextColumn::make('symptom_name')
                    ->searchable(),
                TextColumn::make('logged_at')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('severity')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('duration_value')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('duration_unit')
                    ->searchable(),
                TextColumn::make('trigger_name')
                    ->searchable(),
                TextColumn::make('medication_name')
                    ->searchable(),
                TextColumn::make('medication_dosage')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
