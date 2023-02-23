@extends('layouts.layout')

@section('titulo_pagina')
Instituições Cadastradas
@endsection

@section('content')

    @if(session()->has('mensagem'))
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="alert alert-success text-center">
                {{ session()->get('mensagem') }}
            </div>
        </div>
    </div>
    @endif

    @if($existeInstituicao)
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
    </div>
    @endforeach
    @else
    <div class="mt-4 text-center">
        <h1>Nenhuma Instituição Cadastrada</h1>
    </div>
    @endif
@endsection