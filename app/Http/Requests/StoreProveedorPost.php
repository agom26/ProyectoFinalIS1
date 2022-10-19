<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProveedorPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|min:4|Max:100|regex:/^[\pL\s\-]+$/u',
            'correo'=>'required|min:12|Max:100|email',
            'telefono'=>'required|min:8|numeric',
        ];
    }
    public function messages(){
        return[
            'nombre.required'=>'Este campo es requerido.',
            'nombre.min'=>'Se requiere un mínimo de 4 caracteres.',
            'nombre.Max'=>'Tiene un máximo de 100 caracteres.',
            'nombre.regex'=>'Solo se aceptan letras.',

            'correo.required'=>'Este campo es requerido',
            'correo.min'=>'Se requiere un mínimo de 12 caracteres.',
            'correo.Max'=>'Tiene un máximo de 100 caracteres.',
            'correo.email'=>'Debe tener formato de correo.',

            'telefono.required'=>'Este campo es requerido',
            'telefono.min'=>'Se requiere un minimo de 8 dígitos.',
            'telefono.numeric'=>'Deben ser solo dígitos.',
        ];
    }
}
