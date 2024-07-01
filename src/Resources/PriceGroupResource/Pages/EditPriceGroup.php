<?php

namespace Sorethea\Restaurant\Resources\PriceGroupResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Sorethea\Restaurant\Resources\PriceGroupResource;

class EditPriceGroup extends EditRecord
{
    protected static string $resource = PriceGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
