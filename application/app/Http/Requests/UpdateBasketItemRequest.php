<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\BasketItem;

class UpdateBasketItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        /** @var BasketItem|null $item */
        $item = $this->route(param: 'item');

        if (!$item) {
            return false;
        }

        return $item->basket->user_id === auth(guard: 'api')->id();
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'quantity' => ['required', 'integer', 'min:1'],
        ];
    }
}
