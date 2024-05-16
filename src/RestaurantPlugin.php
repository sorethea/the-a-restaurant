<?php

namespace Sorethea\Restaurant;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Sorethea\Restaurant\Resources\CategoryResource;
use Sorethea\Restaurant\Resources\CuisineResource;
use Sorethea\Restaurant\Resources\RestaurantResource;

class RestaurantPlugin implements Plugin
{

    public function getId(): string
    {
        return "the-a-restaurant";
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            //CategoryResource::class,
            CuisineResource::class,
            RestaurantResource::class,
        ]);

    }

    public function boot(Panel $panel): void
    {

    }
    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
