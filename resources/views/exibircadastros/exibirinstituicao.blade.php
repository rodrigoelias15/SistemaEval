@extends('layouts.layout')

@section('titulo_pagina')
Teste de Cadastrado
@endsection

@section('content')

    @if(session()->has('mensagem'))
        <div class="alert alert-success text-center">
            {{ session()->get('mensagem') }}
        </div>
    @endif

    <div class="row">
        @foreach($instituicaoensino as $instituicao)
        <div class="col-sm-6 my-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"><b>{{$instituicao->nome_instituicao}}</b></h2>
                    <p> <b>Endereço da Instituição:</b> {{$instituicao->endereco_instituicao}}</p>
                    <p> <b>Cidade da Instituição:</b> {{$instituicao->cidade_instituicao}}</p>
                    <p> <b>Estado da Instituição:</b> {{$instituicao->estado_instituicao}}</p>
                    <p> <b>País da Instituição:</b> {{$instituicao->pais_instituicao}}</p>
                    <p> <b>CEP da Instituição:</b> {{$instituicao->cep_instituicao}}</p>
                </div>
                <form class="text-center mb-3" method="post" action="/cadastroinstituicao/remover/{{$instituicao->id}}" onsubmit="return confirm('Deseja excluir a Instituição {{$instituicao->nome_instituicao}}?')">
                    @csrf
                    <button class="btn btn-danger px-4" type="submit">Excluir</button>
                </form>
            </div>
        </div>   
        @endforeach
    </div>
@endsection