<?php

namespace Sorethea\Restaurant\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Sorethea\Restaurant\Models\Category;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));

        return [

        ];
    }
}
