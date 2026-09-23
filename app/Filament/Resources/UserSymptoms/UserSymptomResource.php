<?php

namespace App\Filament\Resources\UserSymptoms;

use App\Filament\Resources\UserSymptoms\Pages\CreateUserSymptom;
use App\Filament\Resources\UserSymptoms\Pages\EditUserSymptom;
use App\Filament\Resources\UserSymptoms\Pages\ListUserSymptoms;
use App\Filament\Resources\UserSymptoms\Schemas\UserSymptomForm;
use App\Filament\Resources\UserSymptoms\Tables\UserSymptomsTable;
use App\Models\UserSymptom;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UserSymptomResource extends Resource
{
    protected static ?string $model = UserSymptom::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return UserSymptomForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UserSymptomsTable::configure($table);
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
            'index' => ListUserSymptoms::route('/'),
            'create' => CreateUserSymptom::route('/create'),
            'edit' => EditUserSymptom::route('/{record}/edit'),
        ];
    }
}
