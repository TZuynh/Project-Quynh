<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class Administrator_Information extends Model
{
    use HasFactory;
    use SoftDeletes;
    /**
     * @return BelongsTo
     */
    public function administrators(): BelongsTo
    {
        return $this->belongsTo(Administrator::class);
    }
    /**
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
    /**
     * @return BelongsTo
     */
    public function provinces(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
    /**
     * @return BelongsTo
     */
    public function districts(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
    /**
     * @return BelongsTo
     */
    public function wards(): BelongsTo
    {
        return $this->belongsTo(Ward::class);
    }

}
