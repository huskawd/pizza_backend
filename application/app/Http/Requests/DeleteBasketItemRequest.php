<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteBasketItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        $item = $this->route(param: 'item');
        return $item !== null
            && $item->basket->user_id === $this->user(guard: 'api')->id;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [];
    }
}
