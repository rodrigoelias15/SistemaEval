@extends('layouts.layout_sem_menu')

@section('titulo_pagina')
Novo Registro
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-5">
        <div class="logo d-flex mt-4">
            <img class="img-fluid" src="img/caedlogo.png" alt="Logo Caed">
        </div>
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" required class="form-control">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" required min="1" class="form-control">
            </div>

            <div class="form-group text-right mt-3">
                <a href="/" class="btn btn-primary mr-2">Voltar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
@endsection