<?php

namespace App\Filament\Resources\UserTriggers;

use App\Filament\Resources\UserTriggers\Pages\CreateUserTrigger;
use App\Filament\Resources\UserTriggers\Pages\EditUserTrigger;
use App\Filament\Resources\UserTriggers\Pages\ListUserTriggers;
use App\Filament\Resources\UserTriggers\Schemas\UserTriggerForm;
use App\Filament\Resources\UserTriggers\Tables\UserTriggersTable;
use App\Models\UserTrigger;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UserTriggerResource extends Resource
{
    protected static ?string $model = UserTrigger::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return UserTriggerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UserTriggersTable::configure($table);
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
            'index' => ListUserTriggers::route('/'),
            'create' => CreateUserTrigger::route('/create'),
            'edit' => EditUserTrigger::route('/{record}/edit'),
        ];
    }
}
