@extends('layouts.layout')

@section('titulo_pagina')
    Página Inicial
@endsection

@section('content')
    <div class="row justify-content-center">
        <div id="texto_apresentacao" class="text-justify mt-4 w-50">
            <img id="img_inicial" src="img/questionario.jpeg">
            <section>
                O Sistema e-VAL tem por objetivo auxiliar instituições, professores e desenvolvedores de itens digitais quanto a seu nível de interatividade, através de um questionário interativo, o sistema calcula a pontuação do item digital que está sendo avaliado, que é mostrado em tempo real.
                O sistema permite a geração de um relatório com todas as questões respondidas, e caso seja relevante para o usuário, a possibilidade de download.
            </section>
        </div>
    </div>
@endsection
