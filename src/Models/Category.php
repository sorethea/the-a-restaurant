<?php

namespace Sorethea\Restaurant\Models;

use Filament\Models\Contracts\HasAvatar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Sorethea\Restaurant\Factories\CategoryFactory;

class Category extends Model implements HasAvatar
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

    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return !empty($this->image) && !is_null($this->image)
            ?$this->image
            :config("filament-avatar.providers.ui-avatar.url")."?name=".urlencode($this->name);
    }
}
