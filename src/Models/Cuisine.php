<?php

namespace Sorethea\Restaurant\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sorethea\Restaurant\Factories\CuisineFactory;

class Cuisine extends Model
{
    use HasFactory;
    protected $fillable =[
        "name",
        "description",
        "images",
    ];
    protected $casts =[
        "name"=>"string",
        "description"=>"string",
        "images"=>"array",
    ];

    protected static function newFactory(): CuisineFactory
    {
        return new CuisineFactory;
    }
}
