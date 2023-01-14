<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AutenticacaoFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Database\QueryException;

class RegistroController extends Controller
{
    public function exibirCadastroLogin()
    {
        return view('cadastrologin.cadastrologin');
    }

    public function cadastrarLogin(AutenticacaoFormRequest $request)
    {
        $data = $request->except('__token');
        $data['password'] = Hash::make($data['password']);
        try{
            $user = User::create($data);
            Auth::login($user);    
            return redirect('/home');
        }catch(QueryException $e){
            $e->getMessage();
        }
        
    }
}