<?php

namespace App\Http\Requests\Kid;

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
            'first_name' => 'string|min:2|max:144',
            'last_name' => 'string|min:2|max:144',
            'declension_name' => 'string|min:2|max:144',
            'history' => 'string|min:2',
            'fundraising' => 'nullable|numeric|gt:0',
            'url' => 'string'
        ];
    }
}
