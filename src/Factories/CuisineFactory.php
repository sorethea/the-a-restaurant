<?php

namespace Sorethea\Restaurant\Factories;

use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
use Sorethea\Restaurant\Models\Cuisine;

class CuisineFactory extends Factory
{
    protected $model = Cuisine::class;

    public function definition(): array
    {
        return [

        ];
    }
}
