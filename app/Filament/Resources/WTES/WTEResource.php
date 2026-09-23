<?php

namespace App\Filament\Resources\WTES;

use App\Filament\Resources\WTES\Pages\CreateWTE;
use App\Filament\Resources\WTES\Pages\EditWTE;
use App\Filament\Resources\WTES\Pages\ListWTES;
use App\Filament\Resources\WTES\Schemas\WTEForm;
use App\Filament\Resources\WTES\Tables\WTESTable;
use App\Models\WTE;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WTEResource extends Resource
{
    protected static ?string $model = WTE::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return WTEForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WTESTable::configure($table);
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
            'index' => ListWTES::route('/'),
            'create' => CreateWTE::route('/create'),
            'edit' => EditWTE::route('/{record}/edit'),
        ];
    }
}
