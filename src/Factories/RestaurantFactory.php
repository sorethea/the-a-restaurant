<?php

namespace Sorethea\Restaurant\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Sorethea\Restaurant\Models\Cuisine;
use Sorethea\Restaurant\Models\Restaurant;

class RestaurantFactory extends Factory
{
    protected $model = Restaurant::class;


    public function definition(): array
    {
        //$cuisines = Cuisine::all()->pluck('id','id')->toArray();
        return [
//            'name' => $this->generateRestaurantName(),
//            'cuisine_id' => $this->faker->randomElement($cuisines),
//            'logo' => $this->faker->imageUrl(),
//            'image' => $this->faker->imageUrl(),
//            'created_at' => Carbon::now(),
//            'updated_at' => Carbon::now(),
        ];
    }
    function generateRestaurantName() {
        $adjectives = ["Spicy", "Cozy", "Hidden", "Little", "Elegant"];
        $nouns = ["Dragon", "Fork", "Spoon", "Kitchen", "Table"];

        $adjective = $adjectives[array_rand($adjectives)];
        $noun = $nouns[array_rand($nouns)];

        return $adjective . " " . $noun;
    }
}
