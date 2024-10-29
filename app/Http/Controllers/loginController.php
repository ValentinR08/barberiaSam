<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    //
    public function index()
    {
        if (auth()->check()) {
            return redirect()->route('formulario.index');
        }
    
        
        return view('login');
    }
    public function logout(){
        auth()->logout();//Algo
        return redirect()->route('login.index');
    }
    public function login(Request $request){
        
        $datos = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        
       
        if(Auth::attempt($datos)){
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Usuario autenticado exitosamente');
        }
        
        return back()->withErrors([
            'email' => 'no existe cuenta con ese email',
        ])->onlyInput('email');
    }
    public function  createUser(){
        return view('nuevoUsuario');
    }
    public function register(Request $request){
        $datos = $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        $user = User::create($datos);
        $user->password = Hash::make($datos['password']);
        $user->save();
        auth()->login($user);
        return redirect('/barberia')->with('success', 'Usuario creado exitosamente');
    }
}

