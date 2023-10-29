<?php

namespace App\Http\Requests\Auth;

use App\Interfaces\UserInterface;
use App\Rules\VerifyExistMail;
use Illuminate\Foundation\Http\FormRequest;

class RecoverPasswordRequest extends FormRequest
{
    public function __construct(private UserInterface $user) {}

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
            'email' => ['required', 'email', new VerifyExistMail($this->user)]
        ];
    }

    public function messages() : array
    {
        return [
            'email.required' => 'Para recuperar seu acesso, é necessário informar seu endereço de e-mail.',
            'email.email' => 'Por favor, insira um endereço de e-mail válido no formato "exemplo@dominio.com".',
        ];
    }
}
