<?php

namespace App\Filament\Resources\Triggers;

use App\Filament\Resources\Triggers\Pages\CreateTrigger;
use App\Filament\Resources\Triggers\Pages\EditTrigger;
use App\Filament\Resources\Triggers\Pages\ListTriggers;
use App\Filament\Resources\Triggers\Schemas\TriggerForm;
use App\Filament\Resources\Triggers\Tables\TriggersTable;
use App\Models\Trigger;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TriggerResource extends Resource
{
    protected static ?string $model = Trigger::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TriggerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TriggersTable::configure($table);
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
            'index' => ListTriggers::route('/'),
            'create' => CreateTrigger::route('/create'),
            'edit' => EditTrigger::route('/{record}/edit'),
        ];
    }
}
