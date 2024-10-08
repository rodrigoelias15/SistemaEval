@extends('layouts.layout_sem_menu')

@section('titulo_pagina')
Novo Registro
@endsection

@section('content')

<x-panels.content>

    <x-alerts.error />
    
    <x-icons.logo />

    <x-panels.form>
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
                <div class="input-group align-items-center">
                    <input type="password" name="password" id="password" required min="1" class="form-control">
                    <i id="mostrar_senha_icon" class="fas fa-eye mr-2" onclick="mostrarSenha()"></i>
                </div>
            </div>
            <script type="text/javascript">
                function mostrarSenha(){
                    if($('#mostrar_senha_icon').hasClass('fas fa-eye mr-2')){
                        $('#mostrar_senha_icon').removeClass('fas fa-eye mr-2').addClass('fas fa-eye-slash mr-2');
                        $('#password').attr("type", "text");
                    }else{
                        $('#mostrar_senha_icon').removeClass('fas fa-eye-slash mr-2').addClass('fas fa-eye mr-2');
                        $('#password').attr("type", "password");
                    }
                };
            </script>
            <div class="form-group text-right mt-3">
                <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
                <a href="/" class="btn btn-primary w-100 my-2">Voltar</a>
            </div>
        </form>
    </x-panels.form>
</x-panels.content>
@endsection