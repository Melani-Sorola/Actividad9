<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginAlertMail; // 📧 Importa tu Mailable

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Método que se ejecuta después de iniciar sesión correctamente.
     */
    protected function authenticated($request, $user)
    {
        // ✅ Enviar correo de alerta de login
        Mail::to($user->email)->send(new LoginAlertMail($user));
    }
}

