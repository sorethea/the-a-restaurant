<?php

namespace Sorethea\Restaurant\Models;

use Filament\Models\Contracts\HasAvatar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Sorethea\Restaurant\Factories\RestaurantFactory;

class Restaurant extends Model implements HasAvatar
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

    public function cuisine(): BelongsTo{
        return $this->belongsTo(Cuisine::class);
    }
    public function getFilamentAvatarUrl(): ?string
    {
        return !empty($this->logo) && !is_null($this->logo)
            ?$this->logo
            :config("filament-avatar.providers.ui-avatar.url")."?name=".urlencode($this->name);
    }
}
