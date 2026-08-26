<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Basket extends Model
{
    protected $fillable = [
        'user_id',
    ];
    /**
     * @return BelongsTo<User, $this>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(related: User::class);
    }
    /**
     * @return HasMany<BasketItem, $this>
     */
    public function items(): HasMany
    {
        return $this->hasMany(related: BasketItem::class);
    }
}
