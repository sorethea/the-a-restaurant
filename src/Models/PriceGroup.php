<?php

namespace Sorethea\Restaurant\Models;

use App\Models\Price;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Sorethea\Restaurant\Factories\PriceGroupFactory;

class PriceGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "restaurant_id",
        "is_default",

    ];

    public function prices(): HasMany
    {
        return $this->hasMany(Price::class);
    }

    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }

    protected static function newFactory(): PriceGroupFactory
    {
        return new PriceGroupFactory;
    }
}
