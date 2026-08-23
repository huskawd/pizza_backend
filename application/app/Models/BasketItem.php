<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BasketItem extends Model
{
    protected $fillable = [
        'basket_id',
        'product_id',
        'quantity',
    ];
    /**
     * @return BelongsTo<Basket, $this>
     */
    public function basket(): BelongsTo
    {
        return $this->belongsTo(Basket::class);
    }
    /**
     * @return BelongsTo<Product, $this>
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
