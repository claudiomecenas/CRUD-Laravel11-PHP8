<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255',
                Rule::unique('categories', 'name')->ignore($this->category, 'id')
            ],
            'slug' => [
                'required',
                'string',
                'min:3',
                'max:255',
                Rule::unique('categories', 'slug')->ignore($this->category, 'id')
            ],
            'description' => [
                'nullable',
                'string',
                'min:3',
                'max:255'
            ],
            'status' => [
                'required',
                'in:0,1'
            ]
        ];
    }
}
