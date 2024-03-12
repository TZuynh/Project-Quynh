<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @return HasMany
     */
    public function provinces(): HasMany
    {
        return $this->hasMany(Province::class);
    }
    /**
     * @return HasMany
     */
    public function adminInformation(): HasMany
    {
        return $this->hasMany(Administrator_Information::class);
    }
    /**
     * @return HasMany
     */
    public function userInformations()
    {
        return $this->hasMany(User_Information::class);
    }
}
