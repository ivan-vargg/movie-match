<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GoogleController extends Controller
{
    // Redirigir al usuario a Google para iniciar sesión
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Obtener la información del usuario de Google y autenticarlo en Laravel
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            // Verificar si el usuario ya existe en la base de datos
            $existingUser = User::where('email', $user->email)->first();
            // dd($user->name);
            if ($existingUser) {
                auth()->login($existingUser);
            } else {
                // Crear un nuevo usuario en la base de datos
                $newUser = new User();
                $newUser->name = $user->name;
                $newUser->email = $user->email;
                // Generar una contraseña temporal utilizando Str::random
                $temporaryPassword = Str::random(16);

                // Encripta la contraseña temporal antes de almacenarla en la base de datos
                $newUser->password = bcrypt($temporaryPassword);
                $newUser->save();

                auth()->login($newUser);
            }

            // Redirigir al usuario a la página deseada después del inicio de sesión
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            // Manejar cualquier excepción que pueda ocurrir durante el proceso
            return redirect()->route('login')->with('error', 'Hubo un problema al iniciar sesión con Google.');
        }
    }
}
