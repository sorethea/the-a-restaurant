<?php

namespace Sorethea\Restaurant\Resources\CuisineResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class RestaurantsRelationManager extends RelationManager
{
    protected static string $relationship = 'restaurants';

    public function form(Form $form): Form
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
                ])->columns(2)
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->default(fn($record)=>$record->getFilamentAvatarUrl())
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
