<?php

namespace Sorethea\Restaurant\Seeders;

use GuzzleHttp\Client;
use Illuminate\Database\Seeder;
use Sorethea\Restaurant\Models\Category;
use Sorethea\Restaurant\Models\Cuisine;
use Sorethea\Restaurant\Models\PriceGroup;
use Sorethea\Restaurant\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    public function run(): void
    {
        $cuisines = [
            "Fast Food"=>[
                "Carl's Jr."=>[
                    "TASTY SNACK COMBO",
                    "SIDES",
                    "JUNIOR BURGERS",
                    "HAPPY STAR MEALS",
                    "HAND-BREADED CHICKEN LEGS & WINGS",
                    "HAND-BREADED CHICKEN",
                    "GUACAMOLE FAMILY",
                    "DESSERTS & DRINKS",
                    "CHARGRILLED DOUBLE BURGERS",
                    "CHARGRILLED CHICKEN",
                    "CHARGRILLED BURGERS",
                    "ALL STAR MEALS",
                ],
                "Texas Chicken"=>[
                    "TEXAS WRAP SET",
                    "TEXAS WRAP",
                    "TEXAS RICE",
                    "TEXAS BURGER",
                    "TASTY SNACK COMBO",
                    "STAR BOX COMBO",
                    "SIDES",
                    "RICE DISH",
                    "FAMILY COMBO",
                    "DRINKS",
                    "DESSERT",
                    "CRUNCHY DEAL",
                    "CHICKEN SNACK",
                    "BURGER SET",
                    "BONE-IN FRIED CHICKEN",
                    "BEVERAGE",

                ],
            ],
        ];

        $c=1;
        $r=1;
        PriceGroup::factory(1)->create([
            "name"=>"Standard",
            "is_default"=>true,
        ]);
        foreach ($cuisines as $cuisineName=>$restaurants){
            Cuisine::factory(1)->create([
                "id"=>$c,
                "name"=>$cuisineName,
            ]);
            foreach ($restaurants as $restaurant=>$categories){
                Restaurant::factory(1)->create([
                    "id"=>$r,
                    "name"=>$restaurant,
                    "cuisine_id" => $c,
                ]);
                foreach ($categories as $category){
                    Category::factory(1)->create([
                        "name"=>$category,
                        "restaurant_id" => $r,
                    ]);
                }
                $r ++;
            }
            $c++;
        }
    }
}
