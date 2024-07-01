<?php

namespace Sorethea\Restaurant\Resources\BranchResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Sorethea\Restaurant\Resources\BranchResource;

class EditBranch extends EditRecord
{
    protected static string $resource = BranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
