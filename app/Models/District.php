<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @return BelongsTo
     */
    public function provinces(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * @return HasMany
     */
    public function wards(): HasMany
    {
        return $this->hasMany(Ward::class);
    }
    /**
     * @return HasMany
     */
    public function adminInformation(): HasMany
    {
        return $this->hasMany(Administrator_Information::class);
    }
}
