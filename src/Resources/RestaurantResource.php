<?php

namespace Sorethea\Restaurant\Resources;

use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Sorethea\Restaurant\Models\Restaurant;
use Sorethea\Restaurant\Resources\RestaurantResource\RelationManagers\PriceGroupRelationManager;

class RestaurantResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = Restaurant::class;

    public static function getNavigationIcon(): string
    {
        return config("restaurant.icons.restaurant");
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\TextInput::make('name')
                        ->label(trans("restaurant::resources.restaurant.name"))
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Select::make('cuisine')
                        ->relationship('cuisine','name')
                        ->label(trans("restaurant::resources.cuisine.singular"))
                        ->required(),
                    Forms\Components\FileUpload::make('logo')
                        ->label(trans("restaurant::resources.restaurant.logo"))
                        ->image(),
                    Forms\Components\FileUpload::make('image')
                        ->label(trans("restaurant::resources.restaurant.image"))
                        ->image(),
                    Forms\Components\Textarea::make('description')
                        ->label(trans("restaurant::resources.restaurant.description"))
                        ->columnSpanFull(),
                    Forms\Components\Textarea::make('information')
                        ->label(trans("restaurant::resources.restaurant.information"))
                        ->columnSpanFull(),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->default(fn($record)=>$record->getFilamentAvatarUrl())
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cuisine.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            PriceGroupRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \Sorethea\Restaurant\Resources\RestaurantResource\Pages\ListRestaurants::route('/'),
            'create' => \Sorethea\Restaurant\Resources\RestaurantResource\Pages\CreateRestaurant::route('/create'),
            'edit' => \Sorethea\Restaurant\Resources\RestaurantResource\Pages\EditRestaurant::route('/{record}/edit'),
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
