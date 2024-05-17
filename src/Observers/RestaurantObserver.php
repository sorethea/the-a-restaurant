<?php

namespace Sorethea\Restaurant\Observers;

use Sorethea\Restaurant\Models\PriceGroup;
use Sorethea\Restaurant\Models\Restaurant;

class RestaurantObserver
{
    public function created(Restaurant $restaurant): void
    {
        $restaurant->priceGroups()->create([
           "name"=>"Standard",
           "is_default"=>true,
        ]);
    }

    public function updated(Restaurant $restaurant): void
    {
    }

    public function deleted(Restaurant $restaurant): void
    {
    }

    public function restored(Restaurant $restaurant): void
    {
    }

    public function forceDeleted(Restaurant $restaurant): void
    {
    }
}
