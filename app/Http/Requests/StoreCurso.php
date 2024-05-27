<?php

namespace App\Http\Requests;

use DragonCode\Contracts\Cashier\Config\Payments\Attributes;
use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            'name'=>'required|min:3',
            'slug'=>'required|unique:cursos',
            'descripcion'=>'required',
            'categoria'=>'required'
        ];
    }

    public function messages(): array
    {
        return['descripcion.required'=>'La descripcion es obligatoria'];
    }

    public function attributes()
    {
        return [
            'name'=>'nombre del curso',
        ];
    }
}
