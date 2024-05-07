<?php

namespace Sorethea\Restaurant\Seeders;

use Illuminate\Database\Seeder;
use Sorethea\Restaurant\Models\Cuisine;

class RestaurantSeeder extends Seeder
{
    public function run(): void
    {
        $cuisines = \File::json(__DIR__."/../cuisines.json");
        foreach ($cuisines as $cuisine){
            Cuisine::factory(1)->create([
                "name"=>$cuisine['name'],
                "description"=>$cuisine['description'],
                "images"=>[$cuisine['image']]
            ]);
        }
    }
}
