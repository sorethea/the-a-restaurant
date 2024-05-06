<?php

namespace Sorethea\Restaurant\Resources\CuisineResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Sorethea\Restaurant\Resources\CuisineResource;

class ListCuisines extends ListRecords
{
    protected static string $resource = CuisineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
