<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionLibro extends FormRequest
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
            'titulo' => 'required|max:100',
            'isbn' => 'required|max:30|unique:libro,isbn,' . $this->route('id'),
            'autor' => 'required|max:100',
            'cantidad' => 'required|numeric',
            'editorial' => 'nullable|max:50',
            'foto_up' => 'nullable|image|max:1024'
        ];
    }

    public function messages()
    {
        return [
            'isbn.unique' => 'Ya existe un libro con ese ISBN',
            'foto_up.max' => 'La caratula no puede tener un peso mayor a 1MB'
        ];
    }
}
