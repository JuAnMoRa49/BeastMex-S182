<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorregi_comp extends FormRequest
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
            'cliente' => 'required',
            'fecha' => 'required|date',
            'producto' => 'required',
        ];
    }
}
