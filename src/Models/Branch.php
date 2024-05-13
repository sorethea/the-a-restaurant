<?php

namespace Sorethea\Restaurant\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sorethea\Restaurant\Factories\BranchFactory;

class Branch extends Model
{
    use HasFactory;

    protected static function newFactory(): BranchFactory
    {
        return new BranchFactory;
    }
}
