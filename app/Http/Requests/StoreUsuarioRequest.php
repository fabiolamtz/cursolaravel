<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
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
    public function rules()
{
    return [
        'nombre' => 'required|string|max:100',
        'apellidos' => 'required|string|max:150',
        'fecha_nacimiento' => 'required|date|before:today',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
        'telefono' => 'required|digits_between:7,15',
        'direccion' => 'required|string|max:255',
        'ciudad' => 'required|string|max:100',
        'estado' => 'required|string|max:100',
        'codigo_postal' => 'required|digits:5',
        'cargo' => 'required|string|max:100',
    ];
}

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'apellidos.required' => 'Los apellidos son obligatorios.',
            'fecha_nacimiento.before' => 'La fecha debe ser anterior a hoy.',
            'email.unique' => 'El correo electrónico ya está en uso.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'telefono.digits_between' => 'El teléfono debe tener entre 7 y 15 dígitos.',
            'codigo_postal.digits' => 'El código postal debe tener 5 dígitos.',
        ];
    }

}
