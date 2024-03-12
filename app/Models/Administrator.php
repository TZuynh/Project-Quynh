<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Administrator extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @return HasMany
     */
    public function adminInformation(): HasMany
    {
        return $this->hasMany(Administrator_Information::class);
    }
    /**
     * @return BelongsTo
     */
    public function roles()
    {
        return $this->belongsTo(Role::class);
    }

}
