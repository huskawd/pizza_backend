<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Enums\OrderStatus;

/**
 * @property OrderStatus $status
 */
class Order extends Model
{
    protected $fillable = [
        'user_id',
        'status',
        'total_price',
        'delivery_region',
        'delivery_city',
        'delivery_street',
        'delivery_house',
        'delivery_entrance',
        'delivery_apartment',
        'delivery_postcode',
    ];

    protected function casts(): array
    {
        return [
            'status' => OrderStatus::class,
        ];
    }
    /**
     * @return BelongsTo<User, $this>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**
     * @return HasMany<OrderItem, $this>
     */
    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
