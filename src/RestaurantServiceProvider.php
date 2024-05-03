<?php

namespace Sorethea\TheARestaurant;

use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RestaurantServiceProvider extends PackageServiceProvider
{
    public static string $name = "the-a-restaurant";
    public function register(): void
    {

    }

    public function boot(): void
    {
    }

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasConfigFile()
            ->hasTranslations()
            ->hasMigrations()
            ->hasViews();
    }
}
