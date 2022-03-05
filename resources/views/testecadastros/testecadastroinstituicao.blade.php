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
    @foreach($instituicaoensino as $instituicao)
    <li class="list-group-item">
        <?php
        echo $instituicao->nome_instituicao . " ";
        echo $instituicao->endereco_instituicao . " ";
        echo $instituicao->cidade_instituicao . " ";
        echo $instituicao->estado_instituicao . " ";
        echo $instituicao->pais_instituicao . " ";
        echo $instituicao->cep_instituicao;
        ?>
    </li>
    @endforeach
</ul>

@endsection