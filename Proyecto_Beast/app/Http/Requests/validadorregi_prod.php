<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorregi_prod extends FormRequest
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
            'txtNombre_Producto' => 'required',
            'txtNoSerie_producto' => 'required|numeric',
            'txtMarca_producto' => 'required',
            'txtCantidad_producto' => 'required|numeric',
            'txtCosto_producto' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'txtPrecioVenta_producto' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'txtFechaCompra_producto' => 'required|date',

        ];
    }
}
