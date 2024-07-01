<?php

namespace Sorethea\Restaurant\Resources\PriceGroupResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Sorethea\Restaurant\Resources\PriceGroupResource;

class ListPriceGroups extends ListRecords
{
    protected static string $resource = PriceGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
