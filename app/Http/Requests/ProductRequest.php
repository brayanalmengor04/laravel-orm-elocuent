<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'code' => 'required|string|min:5|max:15',
            'description' => 'required|string|min:10|max:50',
            'amount' => 'required|integer|min:1|max:999',
            'price' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/', 
            'id_category' => 'required|exists:categories,id',
        ];
    } 

    public function messages(): array
    {
        return [
            'code.required' => 'The code field is required.',
            'code.min' => 'The code must be at least 5 characters.',
            'code.max' => 'The code may not be greater than 15 characters.',
            'description.required' => 'The description field is required.',
            'description.min' => 'The description must be at least 10 characters.',
            'description.max' => 'The description may not exceed 50 characters.',
            'amount.required' => 'The amount field is required.',
            'amount.min' => 'The amount must be greater than 0.',
            'amount.max' => 'The amount may not exceed 999.',
            'price.required' => 'The price field is required.',
            'price.min' => 'The price must not be negative.',
            'price.regex' => 'The price must be a decimal with up to 2 decimal places.',
            'id_category.required' => 'The category field is required.',
            'id_category.exists' => 'The selected category is invalid.',
        ];
    }
}
