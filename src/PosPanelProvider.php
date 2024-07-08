<?php

namespace Sorethea\Restaurant;

use Filament\Panel;
use Filament\PanelProvider;
use Sorethea\Restaurant\Pages\PointOfSale;

class PosPanelProvider extends PanelProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    public function panel(Panel $panel): Panel
    {
        return $panel
            ->spa()
            ->id('pos')
            ->path('pos')
            ->pages([
                PointOfSale::class
            ]);
    }
}
