<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MicrosoftController extends Controller
{
    // Redirige al usuario a Microsoft para iniciar sesión
    public function redirectToMicrosoft()
    {
        return Socialite::driver('microsoft')->redirect();
    }

    // Obtiene la información del usuario de Microsoft y lo autentica en Laravel
    public function handleMicrosoftCallback(Request $request)
    {
        try {
            $user = Socialite::driver('microsoft')->user();

            // Verifica si el usuario ya existe en la base de datos
            $existingUser = User::where('email', $user->email)->first();

            if ($existingUser) {
                Auth::login($existingUser);
            } else {
                // Crea un nuevo usuario en la base de datos
                $newUser = new User();
                $newUser->name = $user->name;
                $newUser->email = $user->email;

                // Genera una contraseña temporal o usa un método apropiado
                $temporaryPassword = bcrypt(str_random(16));
                $newUser->password = $temporaryPassword;

                $newUser->save();

                Auth::login($newUser);
            }

            // Redirige al usuario a la página deseada después del inicio de sesión
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            // Maneja cualquier excepción que pueda ocurrir durante el proceso
            return redirect()->route('login')->with('error', 'Hubo un problema al iniciar sesión con Microsoft.');
        }
    }
}
