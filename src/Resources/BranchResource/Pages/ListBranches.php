<?php

namespace Sorethea\Restaurant\Resources\BranchResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Sorethea\Restaurant\Resources\BranchResource;

class ListBranches extends ListRecords
{
    protected static string $resource = BranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
