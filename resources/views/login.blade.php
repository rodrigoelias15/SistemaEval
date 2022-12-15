@extends('layouts.layout_sem_menu')

@section("titulo_pagina")
Login
@endsection

@section("content")

<div class="row justify-content-center">
    <div class="col-8 col-sm-6 col-md-5 col-lg-4 col-xl-3">
       @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="logo d-flex my-3">
            <img class="img-fluid" src="img/caedlogo.png" alt="Logo Caed">
        </div>

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
                    <a href="#" target="_blank">Esqueci minha senha</a>
                </div>
            </form>
            <div class="text-right" style="font-style: italic; font-size: 14px">
                <span>
                    v1.13.0
                </span>
            </div>
        </div>
    </div>
</div>
@endsection