<?php

namespace app\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ChangePasswordRequest;
use App\Http\Requests\Auth\RecoverPasswordRequest;
use App\Interfaces\TokenInterface;
use App\Interfaces\UserInterface;
use App\Mail\RecoverPasswordMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class RecoverPasswordController extends Controller
{
    public function __construct(
        private UserInterface $user,
        private TokenInterface $token,
    ) {}

    public function index() : View
    {
        return view('auth.recover-password');
    }

    public function show($token) : View
    {
        $token = $this->token->get_token($token);

        return view('auth.change-password')
            ->with('user', $this->user->get_email($token->email))
            ->with('token', $token);
    }

    public function process(RecoverPasswordRequest $request) : RedirectResponse
    {
        $user = $this->user->get_email($request->email); // buscando o id do usuário
        $token = $this->token->create([
            'email' => $request->email,
            'token' => $request->_token
        ]); // criar um token

        $mail = new RecoverPasswordMail($user->name, $token->token);

        Mail::to($user->email)
            ->send($mail);

        return redirect()->route('login.index')
            ->with('success', 'Um e-mail com instruções para a recuperação de senha foi enviado com sucesso. Por favor, verifique sua caixa de entrada.');
    }

    public function changePassword(
        ChangePasswordRequest $request
    ) : RedirectResponse {
        $this->user->update($request->id, ['password' => $request->password]);

        return redirect()->route('login.index')
            ->with('success', 'Sua senha foi alterada, faça login novamente.');
    }

}
