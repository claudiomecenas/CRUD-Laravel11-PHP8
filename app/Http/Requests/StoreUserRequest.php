<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
                'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                // regra para poder passar pela edição
                Rule::unique('users', 'email')->ignore($this->user, 'id')
                
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'max:12'
            ],
        ];
    }
}
