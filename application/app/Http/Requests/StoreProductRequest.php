<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    private const MAX_UNSIGNED_INTEGER = 4294967295;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'integer', 'min:1', 'max:'.self::MAX_UNSIGNED_INTEGER],
            'weight' => ['required', 'integer', 'min:1', 'max:'.self::MAX_UNSIGNED_INTEGER],
            'category' => ['required', 'string', 'max:100'],
        ];
    }
}
