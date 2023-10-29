<?php

namespace App\Http\Requests\Auth;

use App\Interfaces\UserInterface;
use App\Rules\VerifyExistMail;
use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'password.required' => 'O campo de nova senha é obrigatório. Por favor, insira uma nova senha.',
            'password.min' => 'A nova senha deve ter no mínimo 8 caracteres.',
            'password.confirmed' => 'As senhas digitadas não coincidem. Certifique-se de que as senhas correspondam.',
            'password_confirmation.required' => 'O campo de confirmação de senha é obrigatório. Por favor, confirme sua nova senha.',
        ];
    }
}
