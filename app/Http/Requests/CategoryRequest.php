<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'description' => 'required|min:10|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'description.required' => 'The description field is required.',
            'description.string' => 'The description must be a valid string.',
            'description.max' => 'The description may not be greater than 20 characters.',  
            'description.min' => 'The description cannot be less than 10 characters.' 
        ];
    }
}

