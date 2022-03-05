@extends('layouts.layout_sem_menu')

@section("titulo_pagina")
Login
@endsection

@section("content")

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="my-5 d-flex flex-column align-items-center">
    <div class="logo">
        <img class="img-fluid" src="img/caedlogo.png" alt="Logo Caed">
    </div>
    <form method="post">
        @csrf
        <div>
            <label>Usuário<input class="form-control" type="text" name="email"></label>
        </div>
        <div>
            <label>Senha<input class="form-control" type="password" name="password"></label>
        </div>
        <div class="form-group">
            <input class="btn btn-primary w-100 mt-2" type="submit" value="Entrar">
            <a href="/registrar" class="btn btn-primary w-100 mt-2">Criar Conta</a>
        </div>
        <div class="form-group">
            <a href="#" target="_blank">Esqueci minha senha</a>
        </div>
    </form>
</div>
@endsection