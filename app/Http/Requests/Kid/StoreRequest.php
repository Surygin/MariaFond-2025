<?php

namespace App\Http\Requests\Kid;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'first_name' => 'required|string|min:2|max:144',
            'last_name' => 'required|string|min:2|max:144',
            'declension_name' => 'required|string|min:2|max:144',
            'history' => 'required|string|min:2',
            'end_fundraising' => 'required|integer|min:1000|max:100000',
            'url' => 'string'
        ];
    }
}
