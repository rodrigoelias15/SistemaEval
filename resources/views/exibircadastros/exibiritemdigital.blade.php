@extends('layouts.layout')

@section('titulo_pagina')
Visualizar Item Digital
@endsection

@section('content')
    
    <div class="row">
        @foreach($itemdigital as $item)
        <div class="col-sm-6 my-3">
            <div class="card">
                <img id="imagem_item_digital_{{$item->id}}" class="imagem_item_digital" src="{{ url('Imagens/'.$item->imagem_item_digital) }}" data-zoom-image="{{ url('Imagens/'.$item->imagem_item_digital) }}" alt="Item Digital {{$item->id}}">
                <div class="card-body">
                    <h2 class="card-title"><b>{{$item->nome_item_digital}}</b></h2>
                    <p> <b>Área do Item Digital:</b> {{$item->area_item_digital}}</p>
                    <p> <b>Escolaridade do Item Digital:</b> {{$item->escolaridade_item_digital}}</p>
                    <p> <b>URL do Item Digital:</b> {{$item->url_item_digital}}</p>
                    <p> <b>Descrição do Item Digital:</b> {{$item->descricao_item_digital}}</p>
                    <p> <b>Item foi utilizado em larga escala:</b> {{$item->item_utilizado}}</p>
                    <p> <b>Nome da avaliação em que Item Digital foi utilizado:</b> {{$item->nome_avaliacao_item_digital}}</p>
                    <p> <b>Ano do Item Digital:</b> {{$item->ano_item_digital}}</p>
                    <p> <b>Nome da Instituição:</b> {{$item->nome_instituicao}}</p>
                    <p> <b>Plataforma em que o Item Digital está armazenado:</b> {{$item->plataforma_item_digital}}</p>
                    <p> <b>Instituição responsável pela plataforma</b> {{$item->instituicao_plataforma}}</p>
                </div>
                <form class="text-center mb-3" method="post" action="/cadastroitemdigital/remover/{{$item->id}}" onsubmit="return confirm('Deseja excluir o Item Digital {{$item->nome_item_digital}}?')">
                    @csrf
                    <button class="btn btn-danger px-4" type="submit">Excluir</button>
                </form>
            </div>
        </div>
        @endforeach        
    </div>
@endsection