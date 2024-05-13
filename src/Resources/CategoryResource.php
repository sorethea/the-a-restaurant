<?php

namespace Sorethea\Restaurant\Resources;

use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Sorethea\Restaurant\Models\Category;

class CategoryResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = Category::class;

    public static function getNavigationIcon(): string
    {
        return config("restaurant.icons.category");
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("name")
                    ->label(trans("restaurant::resources.category.name"))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => \Sorethea\Restaurant\Resources\CategoryResource\Pages\ListCategories::route('/'),
            'create' => \Sorethea\Restaurant\Resources\CategoryResource\Pages\CreateCategory::route('/create'),
            'edit' => \Sorethea\Restaurant\Resources\CategoryResource\Pages\EditCategory::route('/{record}/edit'),
        ];
    }

    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any',
        ];
    }

    public static function getNavigationGroup(): ?string
    {
        return trans('restaurant::resources.restaurant.plural');
    }
}
