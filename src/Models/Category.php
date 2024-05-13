<?php

namespace Sorethea\Restaurant\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sorethea\Restaurant\Factories\CategoryFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable =[
        "name",
        "image",
    ];

    protected static function newFactory(): CategoryFactory
    {
        return new CategoryFactory();
    }
}
