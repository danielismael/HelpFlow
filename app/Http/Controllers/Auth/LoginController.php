<?php

namespace app\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index() : View
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials))
            return redirect()->route('index');

        return redirect()->back()
            ->withErrors(['error' => 'Desculpe, as credenciais de login estão incorretas. Verifique o nome de usuário e senha e tente novamente.']);
    }
}
