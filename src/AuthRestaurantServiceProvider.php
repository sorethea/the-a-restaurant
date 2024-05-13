<?php

namespace Sorethea\Restaurant;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Sorethea\Restaurant\Models\Category;
use Sorethea\Restaurant\Models\Cuisine;
use Sorethea\Restaurant\Models\Restaurant;
use Sorethea\Restaurant\Policies\CategoryPolicy;
use Sorethea\Restaurant\Policies\CuisinePolicy;
use Sorethea\Restaurant\Policies\RestaurantPolicy;

class AuthRestaurantServiceProvider extends ServiceProvider
{

    protected $policies =[
        Category::class=>CategoryPolicy::class,
        Cuisine::class=>CuisinePolicy::class,
        Restaurant::class=>RestaurantPolicy::class,
    ];
    public function register(): void
    {

    }

    public function boot(): void
    {
    }
}
