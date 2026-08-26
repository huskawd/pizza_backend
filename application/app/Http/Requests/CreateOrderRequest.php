<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Enums\DeliveryType;

class CreateOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'delivery_region' => ['required', 'string'],
            'delivery_city' => ['required', 'string'],
            'delivery_street' => ['required', 'string'],
            'delivery_house' => ['required', 'string'],
            'delivery_entrance' => ['nullable', 'string'],
            'delivery_apartment' => ['nullable', 'string'],
            'delivery_postcode' => ['required', 'string'],
            'delivery_type' => ['required', Rule::enum(type: DeliveryType::class)],
        ];
    }
}
