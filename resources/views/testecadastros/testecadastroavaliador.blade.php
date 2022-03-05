@extends('layouts.layout')

@section('titulo_pagina')
Teste de Cadastrado
@endsection

@section('content')

@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem  }}
</div>
@endif

<ul class="list-group">
    @foreach($usuarioavaliador as $usuario)
    <li class="list-group-item">
        <?php
        echo $usuario->nome_avaliador . " ";
        echo $usuario->sobrenome_avaliador . " ";
        echo $usuario->email_avaliador . " ";
        echo $usuario->endereco_avaliador . " ";
        echo $usuario->cidade_avaliador . " ";
        echo $usuario->cpf_avaliador . " ";
        echo $usuario->instituicao_avaliador . " ";
        echo $usuario->formacao_avaliador . " ";
        echo $usuario->ocupacao_avaliador . " ";
        echo $usuario->estado_avaliador . " ";
        echo $usuario->pais_avaliador . " ";
        echo $usuario->cep_avaliador;
        ?>
    </li>
    @endforeach
</ul>

@endsection