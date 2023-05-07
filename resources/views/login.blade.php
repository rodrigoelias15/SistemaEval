@extends('layouts.layout_sem_menu')

@section("titulo_pagina")
Login
@endsection

@section("content")

<x-panels.content>

    <x-alerts.error />
    <x-icons.logo />

    <x-panels.form>
        <div class="formulario">
            <form method="post">
                @csrf
                <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control" type="text" name="email">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <div class="input-group align-items-center">
                        <input id="mostrar_senha" class="form-control" type="password" name="password">
                        <i id="mostrar_senha_icon" class="fas fa-eye mr-2" onclick="mostrarSenha()"></i>
                    </div>
                </div>
                <script type="text/javascript">
                    function mostrarSenha(){
                        if($('#mostrar_senha_icon').hasClass('fas fa-eye mr-2')){
                            $('#mostrar_senha_icon').removeClass('fas fa-eye mr-2').addClass('fas fa-eye-slash mr-2');
                            $('#mostrar_senha').attr("type", "text");
                        }else{
                            $('#mostrar_senha_icon').removeClass('fas fa-eye-slash mr-2').addClass('fas fa-eye mr-2');
                            $('#mostrar_senha').attr("type", "password");
                        }
                    };
                </script>
                <div class="form-group">
                    <input class="btn btn-primary w-100 mt-2" type="submit" value="Entrar">
                    <a href={{route('cadastrar_novo_login')}} class="btn btn-primary w-100 mt-2">Criar Conta</a>
                </div>
                <div class="form-group">
                    <a href="/password/reset" target="_blank">Esqueci minha senha</a>
                </div>
            </form>
            <div class="text-right" style="font-style: italic; font-size: 14px">
                <span>
                    v1.24.2
                </span>
            </div>
        </div>
    </x-panels.form>
    
</x-panels.content>
@endsection