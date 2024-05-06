<?php

namespace Sorethea\Restaurant\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sorethea\Restaurant\Factories\RestaurantFactory;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "description",
        "information",
        "cuisine_id",
        "logo",
        "image",
    ];

    protected static function newFactory(): RestaurantFactory
    {
        return new RestaurantFactory;
    }
}
