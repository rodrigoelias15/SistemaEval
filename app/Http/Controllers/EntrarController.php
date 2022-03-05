<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EntrarController extends Controller
{
    public function login(){
        return view('autenticacao.login');
    }

    public function entrar(Request $request){
        if(!Auth::attempt($request->only(['email','password']))){
            return redirect()->back()->withErrors('Erro de autenticação, usuário ou senha incorretos.');
        }
        return redirect('/home_sistema');
    }

}
