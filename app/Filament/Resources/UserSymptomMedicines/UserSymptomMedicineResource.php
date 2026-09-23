<?php

namespace App\Filament\Resources\UserSymptomMedicines;

use App\Filament\Resources\UserSymptomMedicines\Pages\CreateUserSymptomMedicine;
use App\Filament\Resources\UserSymptomMedicines\Pages\EditUserSymptomMedicine;
use App\Filament\Resources\UserSymptomMedicines\Pages\ListUserSymptomMedicines;
use App\Filament\Resources\UserSymptomMedicines\Schemas\UserSymptomMedicineForm;
use App\Filament\Resources\UserSymptomMedicines\Tables\UserSymptomMedicinesTable;
use App\Models\UserSymptomMedicine;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UserSymptomMedicineResource extends Resource
{
    protected static ?string $model = UserSymptomMedicine::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return UserSymptomMedicineForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UserSymptomMedicinesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUserSymptomMedicines::route('/'),
            'create' => CreateUserSymptomMedicine::route('/create'),
            'edit' => EditUserSymptomMedicine::route('/{record}/edit'),
        ];
    }
}
