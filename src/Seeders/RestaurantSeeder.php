<?php

namespace Sorethea\Restaurant\Seeders;

use GuzzleHttp\Client;
use Illuminate\Database\Seeder;
use Sorethea\Restaurant\Models\Cuisine;
use Sorethea\Restaurant\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    public function run(): void
    {
        $cuisines = [
            "Khmer" => [
                "Romdeng",
                "Malis Restaurant",
                "Marum",
                "Madame Butterfly",
                "Meta House Garden Restaurant"
            ],
            "Chinese" => [
                "Dragon Palace Restaurant",
                "Golden Crown Restaurant",
                "Ho Choi",
                "Joy Luck Club",
                "Majestic Restaurant"
            ],
            "Japanese" => [
                "Sushi Hokkaido",
                "Sushi Zanmai",
                "Sora Sky Japanese Restaurant",
                "Wasabi Phnom Penh",
                "Yakiniku Don Don"
            ],
            "Italian" => [
                "Il Porcellino d'Oro",
                "La Pasta",
                "Mamma Mia",
                "Napolitana Pizzeria",
                "Picasso Italian Restaurant"
            ]
        ];
        $i = 1;
        foreach ($cuisines as $cuisineName=>$restaurants){
            Cuisine::factory(1)->create([
                "id"=>$i,
                "name"=>$cuisineName,
            ]);
            foreach ($restaurants as $restaurant){
                Restaurant::factory(1)->create([
                   "name"=>$restaurant,
                   "cuisine_id" => $i,
                ]);
            }
            $i++;
        }
    }
}
