<?php

namespace App\Http\Requests\Requisites;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'inn'=> 'numeric|min:10',
            'rs' => 'numeric|min:10',
            'ks'=> 'numeric|min:10',
            'kpp' => 'integer|min:8',
            'bik' => 'numeric|min:7',
            'ogrn' => 'integer|min:10',
            'recipient' => 'string|min:4|max:255',
            'bank_title' => 'string|min:4|max:255',
            'bank_address'=> 'string|min:4|max:255',
        ];
    }
}
