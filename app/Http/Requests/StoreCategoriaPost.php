<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriaPost extends FormRequest
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
            'nombre'=>'unique:categorias|required|min:4|Max:50|regex:/^[\pL\s\-]+$/u',
        ];
    }
    public function messages(){
        return[
            'nombre.unique'=>'La categoría ya fue registrada.',
            'nombre.required'=>'Este campo es requerido',
            'nombre.min'=>'Se requiere de mínimo 4 caracteres.',
            'nombre.Max'=>'Tiene un máximo de 50 caracteres.',
            'nombre.regex'=>'Solo se aceptan letras.',

        ];
    }
}
