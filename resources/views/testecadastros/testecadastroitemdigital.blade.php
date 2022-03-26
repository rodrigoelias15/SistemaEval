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
    @foreach($itemdigital as $item)
        <li class="list-group-item">
            <?php
                echo $item->nome_item_digital . " ";
                echo $item->area_item_digital . " ";
                echo $item->escolaridade_item_digital . " ";
                echo $item->url_item_digital . " ";
                echo $item->descricao_item_digital . " ";
                echo $item->item_utilizado . " ";
                echo $item->nome_avaliacao_item_digital . " ";
                echo $item->ano_item_digital . " ";
                echo $item->nome_instituicao . " ";
                echo $item->plataforma_item_digital . " ";
                echo $item->instituicao_plataforma . " ";
                echo $item->instituicao_item_digital . " ";
                echo $item->nome_avaliador . " ";
                echo $item->email_avaliador;
                echo $item->ocupacao_avaliador;
                echo $item->formacao_avaliador;
                echo $item->instituicao_avaliador;
            ?>
        </li>
        @endforeach
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Image id</th>
                <th scope="col">Image</th>
              </tr>
            </thead>
            <tbody>
                @foreach($itemdigital as $data)
                    <tr>
                        @if($data->imagem_item_digital)
                            <td>{{$data->id}}</td>
                            <td>               
                                <img src="{{ url('public/Imagens/'.$data->imagem_item_digital) }}" style="height: 100px; width: 150px;">                            
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
          </table>
</ul>
@endsection