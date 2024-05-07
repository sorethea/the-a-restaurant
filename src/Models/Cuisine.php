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
        "image",
    ];
    protected $casts =[
        "name"=>"string",
        "description"=>"string",
        "image"=>"string",
    ];

    protected static function newFactory(): CuisineFactory
    {
        return new CuisineFactory;
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return !empty($this->image) && !is_null($this->image)
            ?$this->image
            :config("filament-avatar.providers.ui-avatar.url")."?name=".urlencode($this->name);
    }
}
