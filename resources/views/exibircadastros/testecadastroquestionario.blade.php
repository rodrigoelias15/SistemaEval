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
    @foreach($questionario as $item)
    <li class="list-group-item">
        <?php
            echo $item->nome_avaliador_questionario . " ";
            echo $item->nome_item_digital_questionario . " ";
            echo $item->data_item_digital_questionario . " ";
            echo $item->questionario_item1 . " ";
            echo $item->questionario_item2 . " ";
            echo $item->questionario_item3 . " ";
            echo $item->questionario_item4 . " ";
            echo $item->questionario_item5 . " ";
            echo $item->questionario_item6 . " ";
            echo $item->questionario_item7 . " ";
            echo $item->questionario_item8 . " ";
            echo $item->questionario_item9 . " ";
            echo $item->questionario_item10 . " ";
            echo $item->questionario_item11;
        ?>
    </li>
    @endforeach
</ul>

@endsection