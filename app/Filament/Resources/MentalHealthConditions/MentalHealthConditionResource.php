<?php

namespace App\Filament\Resources\MentalHealthConditions;

use App\Filament\Resources\MentalHealthConditions\Pages\CreateMentalHealthCondition;
use App\Filament\Resources\MentalHealthConditions\Pages\EditMentalHealthCondition;
use App\Filament\Resources\MentalHealthConditions\Pages\ListMentalHealthConditions;
use App\Filament\Resources\MentalHealthConditions\Schemas\MentalHealthConditionForm;
use App\Filament\Resources\MentalHealthConditions\Tables\MentalHealthConditionsTable;
use App\Models\MentalHealthCondition;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MentalHealthConditionResource extends Resource
{
    protected static ?string $model = MentalHealthCondition::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return MentalHealthConditionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MentalHealthConditionsTable::configure($table);
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
            'index' => ListMentalHealthConditions::route('/'),
            'create' => CreateMentalHealthCondition::route('/create'),
            'edit' => EditMentalHealthCondition::route('/{record}/edit'),
        ];
    }
}
