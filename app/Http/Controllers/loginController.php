<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }
    public function login(Request $request, User $user){
        $datos = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        if(Auth::attempt($datos)){
            $request->session()->regenerate();
            if(Auth::user()->admin){
                return redirect('/adm')->with('success', 'Usuario autenticado exitosamente');
            }
            return redirect('/dashboard')->with('success', 'Usuario autenticado exitosamente');
        }
        return back()->withErrors([
            'email' => 'no existe cuenta con ese email',
        ])->onlyInput('email');
    }
}
