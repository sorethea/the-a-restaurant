<?php

namespace Sorethea\Restaurant;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RestaurantServiceProvider extends PackageServiceProvider
{
    public static string $name = "the-a-restaurant";

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasConfigFile()
            ->hasTranslations()
            ->hasMigrations()
            ->hasViews();
    }


    public function register(): void
    {
        if (! app()->configurationIsCached()) {
            $this->mergeConfigFrom(__DIR__.'/../config/restaurant.php', 'restaurant');
        }
    }

    public function boot(): void
    {
        $this->publishesMigrations([__DIR__.'/../database/migrations'=>database_path('migrations')],'restaurant-migrations');
        $this->publishes([
            __DIR__.'/../config/restaurant.php' => config_path('restaurant.php'),
        ], 'restaurant-config');
    }
}
