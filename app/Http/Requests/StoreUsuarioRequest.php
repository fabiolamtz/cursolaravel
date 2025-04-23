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
        'telefono' => 'required|digits_between:7,10',
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
            'nombre.string' => 'El nombre debe ser una cadena de texto.',
            'nombre.max' => 'El nombre no puede tener más de 100 caracteres.',
            'apellidos.string' => 'Los apellidos deben ser una cadena de texto.',
            'apellidos.max' => 'Los apellidos no pueden tener más de 150 caracteres.',
            'apellidos.required' => 'Los apellidos son obligatorios.',
            'fecha_nacimiento.before' => 'La fecha debe ser anterior a hoy.',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha_nacimiento.date' => 'La fecha de nacimiento no es válida.',
            'direccion.required' => 'La dirección es obligatoria.',
            'direccion.string' => 'La dirección debe ser una cadena de texto.',
            'direccion.max' => 'La dirección no puede tener más de 255 caracteres.',
            'ciudad.required' => 'La ciudad es obligatoria.',
            'ciudad.string' => 'La ciudad debe ser una cadena de texto.',
            'ciudad.max' => 'La ciudad no puede tener más de 100 caracteres.',
            'estado.required' => 'El estado es obligatorio.',
            'estado.string' => 'El estado debe ser una cadena de texto.',
            'estado.max' => 'El estado no puede tener más de 100 caracteres.',
            'cargo.required' => 'El cargo es obligatorio.',
            'cargo.string' => 'El cargo debe ser una cadena de texto.',
            'cargo.max' => 'El cargo no puede tener más de 100 caracteres.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'telefono.string' => 'El teléfono debe ser una cadena de texto.',
            'telefono.max' => 'El teléfono no puede tener más de 10 caracteres.',
            'telefono.digits_between' => 'El teléfono debe tener entre 10.',
            'telefono.digits' => 'El teléfono debe tener 10 dígitos.',
            'codigo_postal.required' => 'El código postal es obligatorio.',
            'codigo_postal.max' => 'El código postal no puede tener más de 5 caracteres.',
            'codigo_postal.digits' => 'El código postal debe tener 5 dígitos.',
            'codigo_postal.digits_between' => 'El código postal debe tener entre 5.',
            'email.email' => 'El correo electrónico no es válido.',
            'email.unique' => 'El correo electrónico ya está en uso.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico no es válido.',
            'email.string' => 'El correo electrónico debe ser una cadena de texto.',
            'email.max' => 'El correo electrónico no puede tener más de 255 caracteres.',
            'password.string' => 'La contraseña debe ser una cadena de texto.',
            'password.max' => 'La contraseña no puede tener más de 255 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'password.string' => 'La contraseña debe ser una cadena de texto.',
            'password.max' => 'La contraseña no puede tener más de 255 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'password.string' => 'La contraseña debe ser una cadena de texto.',
            'password.max' => 'La contraseña no puede tener más de 255 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'telefono.digits_between' => 'El teléfono debe tener 10 dígitos.',
            'codigo_postal.digits' => 'El código postal debe tener 5 dígitos.',
        ];
    }

}
