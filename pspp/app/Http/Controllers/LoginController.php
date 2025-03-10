<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


class LoginController extends Controller
{


    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ],[
            'name.unique' => 'Este usuario ya está en uso.',
            'email.unique' => 'Este correo ya está en uso.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ]);

        $validatedData['confirmation_code'] = Str::random(25);

        $user = new User();

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->confirmation_code = $validatedData['confirmation_code'];

        $user->save();

          // Send confirmation code
        Mail::send('auth.confirmation_code', $validatedData, function($message) use ($validatedData) {
            $message->to($validatedData['email'], $validatedData['name'])->subject('Por favor confirma tu correo');
        });

        Auth::login($user);

        notyf()->success('Registro completado exitosamente');
        return redirect(route('actividades'));
    }



    public function login(Request $request)
{
    $credentials = [
        "email" => $request->email,
        "password" => $request->password,
    ];

    $remember = $request->has('remember') ? true : false;

    if (Auth::attempt($credentials, $remember)) {
        $request->session()->regenerate();

        return redirect()->intended(route('inicio'));
    } else {
        // Almacenar el mensaje de error en la sesión
        return redirect('login')->withErrors([
            'email' => 'Las credenciales no son correctas. Por favor, verifica tu correo electrónico y contraseña.',
        ]);
    }
}

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }

    public function verify($code)
{
    $user = User::where('confirmation_code', $code)->first();

    if (! $user)
        return redirect('/');

    $user->confirmed = true;
    $user->confirmation_code = null;
    $user->save();


    notyf()->success('Correo confirmado exitosamente');


    return redirect('/actividades')->with('notification', 'Has confirmado correctamente tu correo!');
}

}
