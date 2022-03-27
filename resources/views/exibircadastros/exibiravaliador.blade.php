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
        @foreach($usuarioavaliador as $usuario)
        <div class="col-sm-6 my-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"><b>{{$usuario->nome_avaliador}} {{$usuario->sobrenome_avaliador}}</b></h2>
                    <p> <b>E-mail do avaliador:</b> {{$usuario->email_avaliador}}</p>
                    <p> <b>Endereço do avaliador:</b> {{$usuario->endereco_avaliador}}</p>
                    <p> <b>Cidade do avaliador:</b> {{$usuario->cidade_avaliador}}</p>
                    <p> <b>CPF do avaliador:</b> {{$usuario->cpf_avaliador}}</p>
                    <p> <b>Instituição do avaliador:</b> {{$usuario->instituicao_avaliador}}</p>
                    <p> <b>Formação do avaliador:</b> {{$usuario->formacao_avaliador}}</p>
                    <p> <b>Ocupação do avaliador:</b> {{$usuario->ocupacao_avaliador}}</p>
                    <p> <b>Estado de residência do avaliador:</b> {{$usuario->estado_avaliador}}</p>
                    <p> <b>País de residência do avaliador:</b> {{$usuario->pais_avaliador}}</p>
                    <p> <b>CEP do avaliador:</b> {{$usuario->cep_avaliador}}</p>               
                </div>
                <form class="text-center mb-3" method="post" action="/avaliador/remover/{{$usuario->id}}" onsubmit="return confirm('Deseja excluir o avaliador {{$usuario->nome_avaliador}} {{$usuario->sobrenome_avaliador}}?')">
                    @csrf
                    <button class="btn btn-danger px-4" type="submit">Excluir</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>




</ul>

@endsection