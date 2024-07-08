<?php

namespace Sorethea\Restaurant\Pages;

use Filament\Pages\Page;

class PointOfSale extends Page
{
    protected static ?string $navigationIcon = 'gmdi-point-of-sale';

    protected static string $view = 'restaurant::filament.pages.point-of-sale';

    public static function getNavigationGroup(): ?string
    {
        return null;
    }
}
