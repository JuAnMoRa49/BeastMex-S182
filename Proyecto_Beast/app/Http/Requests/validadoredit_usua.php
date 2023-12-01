<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadoredit_usua extends FormRequest
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
            'txtNombre_Usuario' => 'required',
            'txtCorreo_Usuario' => 'required|email',
            'txtContrasena_Usuario' => 'required',
        ];
    }
}
