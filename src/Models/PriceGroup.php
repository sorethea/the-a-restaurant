<?php

namespace Sorethea\Restaurant\Models;

use App\Models\Price;
use App\Observers\PriceGroupObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Sorethea\Restaurant\Factories\PriceGroupFactory;
#[ObservedBy([PriceGroupObserver::class])]
class PriceGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "is_default",

    ];

    public function prices(): HasMany
    {
        return $this->hasMany(Price::class);
    }

    protected static function newFactory(): PriceGroupFactory
    {
        return new PriceGroupFactory;
    }
}
