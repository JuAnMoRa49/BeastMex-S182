<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormProductos extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtNombre_producto' => 'required|max:50',
            'txtNo.Serie_producto' => 'required|max:50',
            'txtMarca_producto' => 'required|max:50',
            'txtCantidad_producto' => 'required|max:4|numeric',
            'txtCosto_producto' => 'required|max:10|numeric',
            'txtPrecioVenta_producto' => 'required|max:10|numeric',
            'txtFechaCompra_producto' => 'required|max:10|date',
            'txtFoto_producto' => 'required|max:50',
        ];
    }
}
