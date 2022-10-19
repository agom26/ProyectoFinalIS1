<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|min:3|Max:100|regex:/^[\pL\s\-]+$/u',
            'nit'=>'nullable|min:5|Max:13|',
            'telefono'=>'required|min:8|numeric',
        ];
    }
    public function messages(){
        return[
            'nombre.regex'=>'Solo se permiten letras.',
            'nombre.required'=>'Este campo es requerido.',
            'nombre.min'=>'Debe tener mínimo 3 caracteres.',
            'nombre.Max'=>'Tiene un máximo de 100 caracteres,',

            'nit.required'=>'Este campo es requerido.',
            'nit.regex'=>'Solo se permiten numeros o guion.',
            'nit.min'=>'Debe tener mínimo 5 dígitos.',
            'nit.Max'=>'Tiene un máximo de 13 dígitos',

            'telefono.required'=>'Este campo es requerido',
            'telefono.min'=>'Debe tener mínimo 8 dígitos',
            'telefono.numeric'=>'Solo pueden ser números.'
        ];
    }
}
