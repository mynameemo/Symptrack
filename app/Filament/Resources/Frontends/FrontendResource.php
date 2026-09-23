<?php

namespace App\Filament\Resources\Frontends;

use App\Filament\Resources\Frontends\Pages\CreateFrontend;
use App\Filament\Resources\Frontends\Pages\EditFrontend;
use App\Filament\Resources\Frontends\Pages\ListFrontends;
use App\Filament\Resources\Frontends\Schemas\FrontendForm;
use App\Filament\Resources\Frontends\Tables\FrontendsTable;
use App\Models\Frontend;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FrontendResource extends Resource
{
    protected static ?string $model = Frontend::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return FrontendForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FrontendsTable::configure($table);
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
            'index' => ListFrontends::route('/'),
            'create' => CreateFrontend::route('/create'),
            'edit' => EditFrontend::route('/{record}/edit'),
        ];
    }
}
