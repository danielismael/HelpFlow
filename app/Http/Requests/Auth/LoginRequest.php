<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'O campo de e-mail é obrigatório. Por favor, digite seu endereço de e-mail.',
            'email.email' => 'O endereço de e-mail fornecido não é válido. Certifique-se de digitar um e-mail válido.',
            'password.required' => 'O campo de senha é obrigatório. Por favor, digite sua senha.',
        ];
    }
}
