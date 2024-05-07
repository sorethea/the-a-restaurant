<?php

namespace Sorethea\Restaurant\Models;

use Filament\Models\Contracts\HasAvatar;
use Filament\Panel\Concerns\HasAvatars;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sorethea\Restaurant\Factories\CuisineFactory;

class Cuisine extends Model implements HasAvatar
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

    public function getFilamentAvatarUrl(): ?string
    {
        return !empty($this->images) && is_array($this->images)
            ?$this->images[0]
            :config("filament-avatar.providers.ui-avatar.url")."?name=".urlencode($this->name);
    }
}
