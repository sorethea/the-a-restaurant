<?php

namespace Sorethea\Restaurant\Resources\CuisineResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Sorethea\Restaurant\Resources\CuisineResource;

class EditCuisine extends EditRecord
{
    protected static string $resource = CuisineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
